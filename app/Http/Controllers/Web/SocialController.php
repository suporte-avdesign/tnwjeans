<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Services\ApiService;
use App\Http\Controllers\Controller;
use App\Interfaces\SocialFollowInterface as InterFollow;
use App\Interfaces\SocialNetworkInterface as InterSocial;

class SocialController extends Controller
{
    private $apiService;
    private $interFollow;
    private $interNetwork;

    public function __construct(ApiService $apiService, InterFollow $interFollow, InterSocial $interNetwork)
    {
        $this->apiService = $apiService;
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
        $redirect = route('social-detail', ['id' => $input['id']]);
        return response()->json(['redirect' => $redirect]);
        //return response()->json(['redirect' => 'https://appwebcatalogo.vesti.mobi/catalogo/tnw/98613bcf-3bf3-40ae-a6ec-493cee27651b']);
    }

    /**
     * Details
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $url = "https://api.meuvesti.com/api/appcompras/products/{$id}?scheme_url=tnw&v=1.1";
        $response = $this->apiService->getUrl($url);
        $product = $response->response;
        if ($response->result->success == true) {

            return view('details.detail-1', compact('product'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
    }
}
