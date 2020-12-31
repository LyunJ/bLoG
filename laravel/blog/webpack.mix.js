const mix = require("laravel-mix");

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

mix.js(["resources/js/home.js"], "public/js");

mix.js(["resources/js/mainpage-portfolio-image-slide.js"], "public/js");

mix.postCss("resources/css/home.css", "public/css")
    .postCss("resources/css/login.css", "public/css")
    .postCss("resources/css/signup.css", "public/css")
    .postCss("resources/css/top_nav.css", "public/css")
    .postCss("resources/css/mainpage.css", "public/css");
