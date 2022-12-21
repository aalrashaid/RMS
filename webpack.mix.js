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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// In the build files, there is JS
mix.js('resources/js/app.js', 'public/assets/js')
    .js('resources/js/dashboard.js', 'public/assets/js/dashboards');

// In the build files, there is Sass
mix.sass('resources/sass/app.scss', '/public/assets/css')
    .sass('resources/sass/dashboards/dashboard.scss', 'public/assets/css/dashboards')
    .sass('resources/sass/bootstrap/scss/bootstrap.scss', 'public/assets/css/bootstarp');


//mix.copy('node_modules/vendor/fonts', 'public');
//mix.copyDirectory('node_modules/vendor/fonts', 'public');

// The copy and Directory
//mix.copyDirectory('resources/fonts', 'public/assets/fonts');
//mix.copyDirectory('resources/imgs', 'public/assets/imgs');
 //mix.copyDirectory('resources/sass/bootstrap-icons', 'public/assets/bootstrap-icons');
