const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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


const BOWER_PATH = '../../../bower/';

elixir(mix => {
    mix
        .sass('app.scss')
        .browserSync({
            port: 8090,
            open: 'external',
            host: 'quotes-gen.app',
            proxy: 'http://quotes-gen.app:8089/',
        })
        .scripts([
            BOWER_PATH + 'angular/angular.min.js',
            BOWER_PATH + 'angular-resource/angular-resource.min.js',
            BOWER_PATH + 'jquery/dist/jquery.min.js',
            BOWER_PATH + 'bootstrap/dist/js/bootstrap.min.js',
        ], 'public/js/vendor.js')
        .coffee(['resources/assets/coffee/*.coffee', 'resources/assets/coffee/*/*.coffee']);
});
