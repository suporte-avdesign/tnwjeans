const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | bootstrap, font-awesome
 |--------------------------------------------------------------------------
 */


mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/img', 'public/img');
mix.copy('resources/assets/css', 'public/css');
mix.copy('resources/assets/js', 'public/js');
