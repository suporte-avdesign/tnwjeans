<?php

namespace App\Http\Controllers\Web;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    private $view = 'home';
    private $home;
    private $content;
    /**
     * @var Home
     */

    public function __construct()
    {
        $this->home = array(
            'color' => 'orange', #blue,blueviolet,goldenrod,green,magenta,orange,purple,red,yellow,yellowgreen
            'color_style' => 'light', #dark,light
            'layout_style' => 'wide', #wide, boxed
            'separator_style' => 'normal', #normal, skew, reversed-skew, double-diagonal, big-triangle

            'mainslider' => 'classicslider1', #classicslider1,
        );
        $this->content = array(
            'title' => 'TNW JEANS'
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = typeJson($this->home);
        $content = typeJson($this->content);
        return view("{$this->view}.home-1", compact('home','content'));
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
