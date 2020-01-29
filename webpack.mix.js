const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | bootstrap, font-awesome
 |--------------------------------------------------------------------------
 */

mix.styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/bootstrap/css/bootstrap.min.css');
mix.styles('node_modules/font-awesome/css/font-awesome.min.css', 'public/font-awesome/css/font-awesome.min.css');

mix.copy('node_modules/font-awesome/fonts', 'public/font-awesome/fonts');

mix.copy('resources/assets/img', 'public/img');
mix.copy('resources/assets/css', 'public/css');
mix.copy('resources/assets/js', 'public/js');
