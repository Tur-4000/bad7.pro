const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/img', 'public/img');

mix.js('resources/js/manage.js', 'public/js')
    .sass('resources/sass/manage.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
