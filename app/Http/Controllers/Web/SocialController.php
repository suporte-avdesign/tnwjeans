<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Services\UserAgent;
use App\Services\ApiService;
use App\Http\Controllers\Controller;
use App\Interfaces\SocialShareInterface as InterShare;
use App\Interfaces\SocialFollowInterface as InterFollow;
use App\Interfaces\SocialNetworkInterface as InterSocial;

class SocialController extends Controller
{
    private $userAgent;
    private $apiService;
    private $interShare;
    private $interFollow;
    private $interNetwork;

    public function __construct(
        UserAgent $userAgent,
        ApiService $apiService,
        InterShare $interShare,
        InterFollow $interFollow,
        InterSocial $interNetwork)
    {
        $this->userAgent = $userAgent;
        $this->apiService = $apiService;
        $this->interShare = $interShare;
        $this->interFollow = $interFollow;
        $this->interNetwork = $interNetwork;
    }

    /**
     * Quem seguiu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function follow(Request $request)
    {
        $follow  = $this->interFollow->create($request->all());
        $network = $this->interNetwork->setId($request['social_network_id']);

        return response()->json(['redirect' => $network->link]);
    }

    /**
     * Compartilhar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function share(Request $request)
    {
        $input = $request->all();
        $input['product_id'] = $input['id'];
        $register = $this->interShare->create($input);
        $network = $this->interNetwork->setId($input['social_network_id']);
        $redirect = route('social-detail', ['network' => $network->name, 'id' => $input['id']]);
        return response()->json(['redirect' => $redirect]);
    }

    /**
     * Details
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $network, $id)
    {
        $url = "{$this->apiService->urlDetail()}/{$id}?{$this->apiService->parameters()}";
        $response = $this->apiService->getUrl($url);
        $product = $response->response;
        $isMobile = $this->userAgent->isMobile();
        $socials = $this->interNetwork->get();
        if ($response->result->success == true) {
            // Verifica se foi compartilhado
            $share = $request->get('share');
            return view('details.detail-1', compact(
                'share',
                    'network',
                    'socials',
                    'product',
                    'isMobile')
            );
        }
    }


}
