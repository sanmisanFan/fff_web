var elixir = require('laravel-elixir');
var gulp = require('gulp');

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

/**
 * 拷贝任何需要的文件
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

    gulp.src("resources/assets/bower_components／**")
        .pipe(gulp.dest("public/assets/vendor/"));
});


/**
 * Default gulp is to run this elixir stuff
 */
elixir(function(mix) {

    // 合并 scripts
    //mix.scripts(['js/jquery.js','js/bootstrap.js'],
    //    'public/assets/js/admin.js',
    //    'resources/assets'
    //);
    
    mix.copy('resources/assets/backend', 'public/assets/backend');

    //mix.sass('app.scss');
});
