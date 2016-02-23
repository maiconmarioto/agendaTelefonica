var elixir = require('laravel-elixir'),
    bowerDir = "vendor/bower_components/";

require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.browserSync();
    //  mix.livereload();
});

elixir( function(mix) {
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts')
        .copy(bowerDir + 'font-awesome/fonts', 'public/fonts')

        .copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js')
        .copy(bowerDir + 'jquery/dist/jquery.js', 'resources/assets/js')

        .scripts([
            'jquery.js',
            'bootstrap.js',
            'custom.js'
        ], 'public/js/scripts.js')

        .less('app.less');
});