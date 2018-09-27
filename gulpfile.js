const elixir = require('laravel-elixir');
const $ = require('jquery');

elixir((mix) => {
    mix.scripts([
        'jquery/dist/jquery.min.js',
        'wordpress/wordpress.js' ],
        'public/js/app.js', 'node_modules')
        .sass('app.scss').browserify('app.js');
});
