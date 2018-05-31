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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')

//    styles([

//     'libs/blog-post.css',
//     'libs/bootstrp.css',
//     'libs/font-awesome.css',
//     'libs/mentisMenu.css',
//     'libs/sb-admin-2.css',



// ], 'public/css/libs.css')

//    scripts([

//     'libs/blog-post.js',
//     'libs/bootstrp.js',
//     'libs/script.js',
//     'libs/mentisMenu.js',
//     'libs/sb-admin-2.js',



// ], 'public/js/libs.js');
;
