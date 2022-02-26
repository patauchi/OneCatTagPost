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
mix.options({
    hmrOptions: {
        host: "localhost",
        port: 8080,
    },
});

mix.webpackConfig({
    devServer: {
        host: "0.0.0.0",
        port: 8080,
    },
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
mix.copy('resources/fonts', 'public/fonts');


mix.browserSync('http://kimsa.test/');

