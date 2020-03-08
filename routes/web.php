<?php

/*
|--------------------------------------------------------------------------
| Route Home
|--------------------------------------------------------------------------
*/

Route::get('/', 'Web\HomeController@index')->name('home');
/*
|--------------------------------------------------------------------------
| Redes Sociais
|--------------------------------------------------------------------------
*/
Route::post('ajax/social/follow', 'Web\SocialController@follow');
Route::post('ajax/social/share', 'Web\SocialController@share');
Route::get('social/share/{network}/{id}', 'Web\SocialController@detail')->name('social-detail');
/*
|--------------------------------------------------------------------------
| Share Whatsapp
|--------------------------------------------------------------------------
*/
Route::post('ajax/share/whatsapp', 'Web\WhatsappController@share');
/*
|--------------------------------------------------------------------------
| Redirect Shopping
|--------------------------------------------------------------------------
*/
Route::post('ajax/redirect/shopping', 'Web\ShoppingController@redirect');



