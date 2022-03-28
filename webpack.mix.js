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
    .js('resources/js/filter.js', 'public/js').version()
    .js('resources/js/header.js', 'public/js').version()
    .sass('resources/css/app.scss', 'public/css').version()
    .sass('resources/css/cards.scss', 'public/css').version();
mix.imgs({
    source: 'resources/card-img',
    destination: 'public/images',
    imageminPngquantOptions: { quality: [0, 0.1] }
});
mix.imgs({
    source: 'resources/card-ears',
    destination: 'public/images',
    imageminPngquantOptions: { quality: [0, 0.1] }
});
mix.imgs({
    source: 'resources/card-eye',
    destination: 'public/images',
    imageminPngquantOptions: { quality: [0, 0.1] }
});
