<?php

use Illuminate\Database\Seeder;
use App\Models\SocialNetwork;


class SocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialNetwork::create([
            'name' => 'whatsapp',
            'link' => '',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'instagram',
            'link' => 'https://www.instagram.com/tnwjeans',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'facebook',
            'link' => 'https://www.facebook.com/tnwjeans',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'youtube',
            'link' => 'https://www.youtube.com/channel/UCwWZyzHPXyPvKVirDzQy_YQ',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'twitter'
        ]);
        SocialNetwork::create([
            'name' => 'google'
        ]);
        SocialNetwork::create([
            'name' => 'skype'
        ]);
        SocialNetwork::create([
            'name' => 'linkedin'
        ]);
    }
}
