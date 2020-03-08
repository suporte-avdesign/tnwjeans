<?php

namespace App\Http\Controllers\Web;

use App\Models\Home;
use App\Services\UserAgent;
use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\SocialNetworkInterface as InterSocial;
use App\Interfaces\ConfigSiteInterface as ConfigSite;


class HomeController extends Controller
{
    private $view = 'home';
    private $home;
    private $content;
    private $userAgent;
    private $configSite;
    private $interSocial;
    private $apiService;
    /**
     * @var Home
     */

    public function __construct(
        UserAgent $userAgent,
        ConfigSite $configSite,
        ApiService $apiService,
        InterSocial $interSocial)
    {
        $this->content = array(
            'title' => 'TNW JEANS - FABRICA E COMERCIO DE JEANS',
            'copyright' => 'Copyright©2008-'.date('Y').', TNW JEANS. todos os direitos reservados. Projetado por',
        );

        $this->userAgent = $userAgent;
        $this->configSite = $configSite;
        $this->apiService = $apiService;
        $this->interSocial = $interSocial;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = $this->getProducts();
        $socials = $this->interSocial->get();
        $configSite = $this->configSite->setId(1);
        $isMobile = $this->userAgent->isMobile();
        $content = typeJson($this->content);
        return view("{$this->view}.home-1", compact('configSite', 'isMobile', 'socials', 'content', 'products'));
    }

    /**
     * Retorna os produtos da api
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        $url = 'https://api.meuvesti.com/api/appcompras/catalogues?scheme_url=tnw&perpage=30&page=1&v=1.2';
        $response = $this->apiService->getUrl($url);

        return $response->response->data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postDetails($id)
    {
        $url = "https://api.meuvesti.com/api/appcompras/products/{$id}?scheme_url=tnw&v=1.1";
        $response = $this->apiService->getUrl($url);

        dd($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
