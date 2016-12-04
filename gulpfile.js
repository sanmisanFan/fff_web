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

    //后端组件资源根据需要copy到public目录
    gulp.src("resources/assets/bower_components/**")
        .pipe(gulp.dest("public/assets/vendor"));

    // Copy clean-blog less files
   /* gulp.src("resources/assets/bower_components/clean-blog/less/**")
        .pipe(gulp.dest("resources/assets/less/clean-blog")); */

    //Copy jQuery 
    gulp.src("resources/assets/bower_components/jquery/dist/jquery.js")
        .pipe(gulp.dest("resources/assets/js/"));

    //Copy Bootstrap
    gulp.src("resources/assets/bower_components/bootstrap/dist/js/bootstrap.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("resources/assets/bower_components/bootstrap/less/**")
        .pipe(gulp.dest("resources/assets/less/bootstrap"));

    gulp.src("resources/assets/bower_components/bootstrap/dist/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

    //Copy Fontawesome
    gulp.src("resources/assets/bower_components/fontawesome/less/**")
        .pipe(gulp.dest("resources/assets/less/fontawesome"));

    gulp.src("resources/assets/bower_components/fontawesome/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

});


/**
 * Default gulp is to run this elixir stuff
 */
elixir(function(mix) {

    // 合并 scripts
    /*
    mix.scripts([
        'js/jquery.js',
        'js/bootstrap.js',
        'js/mainsite.js'
        ],
        'public/assets/js/mainsite.js','resources//assets'
    );
    */
    //后端资源复制到public的admin路径
    //mix.copy('resources/assets/backend', 'public/admin/assets/backend');

    //
    //mix.copy('resources/assets/img', 'public/assets/img');

    // Compile CSS
    mix.less('mainsite.less', 'public/assets/css/mainsite.css');

    //mix.sass('app.scss');
});
