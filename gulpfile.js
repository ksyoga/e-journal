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
    //mix.sass('app.scss');
    mix.styles([
    	"css/bootstrap.min.css",
    	"css/font-awesome.min.css",
    	"css/ionicons.min.css",
    	"css/AdminLTE.min.css",
    	"css/skins/skin-blue.min.css"

    ]);

    mix.scripts([
    	"plugins/jQuery/jQuery-2.1.4.min.js",
    	"js/bootstrap.min.js",
    	"js/app.min.js"
    ])
});
