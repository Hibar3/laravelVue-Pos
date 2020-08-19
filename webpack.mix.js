const mix = require('laravel-mix');
let options = mix.options({})
let hmr = options.config.hmr
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

mix.webpackConfig({
       resolve: {
            modules: [
                path.join(__dirname, "node_modules"),
                path.join(__dirname, 'resources', 'assets', 'js'),
            ]
        },
        output: {
            publicPath: hmr ? ('http://localhost:5880') : '/' //wepack output
        },
        devServer: {
            proxy: {
                '*': 'http://localhost:8000' //this is default host to be proxy to 8080
            }
        }
    });
    // .webpackConfig({
    //     // resolve: {
    //     //     modules: [
    //     //         path.join(__dirname, "node_modules"),
    //     //         path.join(__dirname, 'resources', 'assets', 'js'),
    //     //     ]
    //     // },
    //     output: {
    //         publicPath: hmr ? ('http://localhost:8000') : '/'
    //     }
    // });