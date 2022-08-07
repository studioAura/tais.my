const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/assets/css/plugins.css',
    'resources/assets/css/style.css',
], 'public/assets/css/style.css');

mix.styles([
    'resources/assets/css/plugins/bootstrap-grid.min.css',
    'resources/assets/css/plugins/fontawesome-all.min.css',
    'resources/assets/css/plugins/animate.css',
    'resources/assets/css/plugins/slick.css',
    'resources/assets/css/plugins/swiper.min.css',
    'resources/assets/css/plugins/aos.css',
    'resources/assets/css/plugins/justifiedGallery.min.css',
    'resources/assets/css/plugins/magnific-popup.css',
    'resources/assets/css/plugins/youtubepopup.css',
], 'public/assets/css/plugins/plugins.css');

mix.scripts([
    'resources/assets/js/jquery-3.1.1.min.js',
    'resources/assets/js/plugins.js',
    'resources/assets/js/dsn-grid.js',
    'resources/assets/js/custom.js',
], 'public/assets/js/scripts.js');

mix.copyDirectory('resources/assets//img', 'public/assets/img');
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
