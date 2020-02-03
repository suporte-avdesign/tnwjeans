<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Interfaces\SocialFollowInterface as InterFollow;
use App\Interfaces\SocialNetworkInterface as InterSocial;

class SocialController extends Controller
{
    private $interFollow;
    private $interNetwork;

    public function __construct(InterFollow $interFollow, InterSocial $interNetwork)
    {
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
        $redirect = route('social-detail', ['slug' => $input['img']]);
        //return response()->json(['redirect' => $redirect]);
        return response()->json(['redirect' => 'http://www.tnwjeans.com.br/debora-seco-2017']);
    }

    /**
     * Details
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        return view('details.detail-1', compact('slug'));
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
