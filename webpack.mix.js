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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
<<<<<<< HEAD
    ]);
=======
    ])
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> 4df95686cf23d9ce8c222f4d5686cac5cf75b531
