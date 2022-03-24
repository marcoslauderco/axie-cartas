const mix = require('laravel-mix');
require('laravel-mix-simple-image-processing')

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
    .sass('resources/css/app.scss', 'public/css').version();
mix.imgs({
    source: 'resources/card-img',
    destination: 'public/images',
    // ... other optional parameters
})
mix.imgs({
    source: 'resources/card-ears',
    destination: 'public/images',
    // ... other optional parameters
})
