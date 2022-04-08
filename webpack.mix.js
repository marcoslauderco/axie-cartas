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

// Back
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Back Cards Art/Reptile',
    to: 'public/images',
});


// ear
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Ear Cards Art/Reptile',
    to: 'public/images',
});

// eye
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Eye Cards Art/Reptile',
    to: 'public/images',
});

//horn
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Horn Cards Art/Reptile',
    to: 'public/images',
});

//mouth
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Mouth Cards Art/Reptile',
    to: 'public/images',
});

//tail
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Aquatic',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Beast',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Bird',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Bug',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Plant',
    to: 'public/images',
});
mix.ImageWebp({
    from: 'resources/cards/Tail Cards Art/Reptile',
    to: 'public/images',
});
