<?php

namespace App\Http\Controllers\Web;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\SocialNetworkInterface as InterSocial;
use App\Interfaces\ConfigSiteInterface as ConfigSite;


class HomeController extends Controller
{
    private $view = 'home';
    private $home;
    private $content;
    private $configSite;
    private $interSocial;
    /**
     * @var Home
     */

    public function __construct(
        InterSocial $interSocial, ConfigSite $configSite)
    {
        $this->content = array(
            'title' => 'TNW JEANS - FABRICA E COMERCIO DE JEANS',
            'copyright' => 'Copyright©2008-'.date('Y').', TNW JEANS. todos os direitos reservados. Projetado por',
        );

        $this->configSite = $configSite;
        $this->interSocial = $interSocial;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(ipLocation());
        $socials = $this->interSocial->get();
        $configSite = $this->configSite->setId(1);
        $content = typeJson($this->content);
        return view("{$this->view}.home-1", compact('configSite', 'socials', 'content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
