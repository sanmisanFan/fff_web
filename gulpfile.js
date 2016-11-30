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
    gulp.src("resources/assets/bower_components/clean-blog/less/**")
        .pipe(gulp.dest("resources/assets/less/clean-blog"));
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
    
    //后端资源复制到public的admin路径
    mix.copy('resources/assets/backend', 'public/admin/assets/backend');

    //mix.sass('app.scss');
});
