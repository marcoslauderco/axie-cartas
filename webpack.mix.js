const mix = require('laravel-mix');
require('laravel-mix-webp');

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
    .sass('resources/css/cards.scss', 'public/css').version()
    .sass('resources/css/about.scss', 'public/css').version()
    .sass('resources/css/runes.scss', 'public/css').version();

mix.ImageWebp({
    from: 'resources/card-img',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/card-ears',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/card-eye',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/runes_charms',
    to: 'public/images',
});
