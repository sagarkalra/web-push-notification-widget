// process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  var bootstrapPath = 'node_modules/bootstrap-sass/assets';
  mix.sass('app.scss').sass('login.scss').copy(bootstrapPath + '/fonts', 'public/fonts');
  mix.styles([
    "app.css", "login.css"
  ], 'public/css/final.css', 'public/css').browserify('app.js');
  // mix.version(['public/css/final.css', 'public/js/app.js']);
  // mix.version('public/js/app.js');
});