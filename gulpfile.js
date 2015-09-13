var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

   /* mix.sass('app.scss'); */

    mix.styles([
        'vendor/bootstrap.min.css',
        'vendor/admin.template.css',
        'app.css'
    ],null,'public/css');

    mix.styles([
       'vendor/bootstrap.min.css',
        'vendor/business-casual.css'
    ],'public/css/frontend','public/css/');

    mix.scripts([
        'vendor/jquery-1.11.3.min.js',
        'vendor/bootstrap.min.js',
        'vendor/admin.template.js',
        'vendor/helpers.js'
    ],null,'public/js');

    mix.scripts([
        'vendor/jquery-1.11.3.min.js',
        'vendor/bootstrap.min.js',
    ],'public/js/frontend','public/js');

});
