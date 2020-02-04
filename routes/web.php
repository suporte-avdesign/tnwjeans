<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Web\HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Redes Sociais
|--------------------------------------------------------------------------
*/
Route::post('ajax/social/follow', 'Web\SocialController@follow')->name('social-follow');
Route::post('ajax/social/share', 'Web\SocialController@share')->name('social-share');
Route::get('social/share/{id}', 'Web\SocialController@detail')->name('social-detail');
