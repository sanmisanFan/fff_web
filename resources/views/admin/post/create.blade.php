@extends('admin.layout')

@section('styles')
    <!-- CHOSEN-->
    <link rel="stylesheet" href="/admin/assets/vendor/chosen_v1.2.0/chosen.min.css">
    <!-- pickadate-->
    <link href="/admin/assets/vendor/pickadate/lib/themes/default.css" rel="stylesheet">
    <link href="/admin/assets/vendor/pickadate/lib/themes/default.date.css" rel="stylesheet">
    <link href="/admin/assets/vendor/pickadate/lib/themes/default.time.css" rel="stylesheet">
    <!--引入wangEditor.css-->
    <link rel="stylesheet" type="text/css" href="/admin/assets/vendor/wangEditor/dist/css/wangEditor.min.css">
@stop

@section('content')
    <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">Posts <small>» Add New Post</small></div>
                @include('admin.partials.errors')
            <div class="row">
                <!-- Article Content-->
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.post.store') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                @include('admin.post._form')

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="fa fa-disk-o"></i>
                                                Save New Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <!-- CHOSEN-->
    <script src="/admin/assets/vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
    <!-- Pickadate-->
    <script src="/admin/assets/vendor/pickadate/lib/picker.js"></script>
    <script src="/admin/assets/vendor/pickadate/lib/picker.date.js"></script>
    <script src="/admin/assets/vendor/pickadate/lib/picker.time.js"></script>
    <!-- wangEditor-->
    <script type="text/javascript" src="/admin/assets/vendor/wangEditor/dist/js/wangEditor.min.js"></script>
    
   <!-- Demo-->
   <script>
        $('.chosen-select').chosen();

        var editor = new wangEditor('content');
        // 关闭菜单栏fixed
        editor.config.menuFixed = false;
        // 仅仅想移除某几个菜单，例如想移除『插入代码』和『全屏』菜单：
        // 其中的 wangEditor.config.menus 可获取默认情况下的菜单配置
        editor.config.menus = $.map(wangEditor.config.menus, function(item, key) {
            
            if (item === 'fullscreen') {
                 return null;
             }
             return item;
         }); 

         // 将全屏时z-index修改为20000
        //editor.config.zindex = 20000;

        editor.create();

      $(function() {
        $("#publish_date").pickadate({
            format: "mmm-d-yyyy"
        });
        $("#publish_time").pickatime({
            format: "h:i A"
        });
    });
   </script>
@stop