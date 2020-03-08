<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Interfaces\WhatsappInterface as InterWhatsapp;
use App\Interfaces\SocialNetworkInterface as InterSocial;


class WhatsappController extends Controller
{

    private $interNetwork;
    private $interWhatsapp;

    public function __construct(InterSocial $interNetwork, InterWhatsapp $interWhatsapp)
    {
        $this->interNetwork = $interNetwork;
        $this->interWhatsapp = $interWhatsapp;
    }

    /**
     * Registra os acessos e retona a url do detalhe do produto.
     *
     * @return \Illuminate\Http\Response
     */
    public function share(Request $request)
    {
        $input = $request->all();
        $input['product_id'] = $input['id'];
        $register = $this->interWhatsapp->create($input);
        $network = $this->interNetwork->setId($input['social_network_id']);
        $redirect = route('social-detail', ['network' => $network->name, 'id' => $input['id']]);

        return response()->json(['redirect' => $redirect]);
    }

}
