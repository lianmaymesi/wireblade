const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const tailwindcssforms = require("@tailwindcss/forms")

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

mix.js("resources/assets/js/app.js", "public/assets/js/wireblade.js").postCss(
    "resources/assets/css/app.css",
    "public/assets/css/wireblade.css",
    [tailwindcss, tailwindcssforms]
).version;
