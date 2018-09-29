let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js/app.js')
.js('resources/assets/js/bootstrap.js', 'public/js/bootstrap.js')
.js('resources/assets/js/mdbootstrap.js', 'public/js/mdbootstrap.js')
.sass('resources/assets/sass/app.scss', 'public/css/app.css')
.sass('resources/assets/sass/mdbootstrap.scss', 'public/css/mdbootstrap.css')
.sass('resources/assets/sass/bootstrap.scss', 'public/css/bootstrap.css')
.styles('resources/assets/sass/animate.css', 'public/css/animate.css');
