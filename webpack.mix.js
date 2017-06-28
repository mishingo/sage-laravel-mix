let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your theme. By default, we are compiling the Sass file for the theme 
 | as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('dist')
   .js('assets/scripts/app.js', 'scripts/')
   .extract([
   		'jquery',
   		'axios',
   		'babel-polyfill',
   		'lodash',
         'tether',
   		'vue'
   	])
   .sass('assets/styles/app.scss', 'styles/')
   .copy('assets/images', 'dist/images/', false)
   .options({
      processCssUrls: false
    })
   .version();