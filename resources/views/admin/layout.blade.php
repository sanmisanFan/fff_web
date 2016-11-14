<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- 设置站点标题 --}}
        <title>{{ config('website.title') }} FoodForFun - Admin</title>

        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
        {{-- 该 Blade 指令将会输出继承自该布局的子视图的 styles 区块内容（如果有的话），其目的在于将 CSS 样式文件放到模板顶部。--}}
        @yield('styles')

        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        {{-- Navigation Bar --}}
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ config('website.title') }} Admin</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    @include('admin.partials.navbar')
                </div>
           </div>
        </nav>

        @yield('content')

        <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        @yield('scripts')

    </body>
</html>