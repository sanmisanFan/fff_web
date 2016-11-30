@extends('admin.layout')

@section('styles')
    <!-- CHOSEN-->
    <link rel="stylesheet" href="/assets/vendor/chosen_v1.2.0/chosen.min.css">
    <!-- pickadate-->
    <link href="/assets/vendor/pickadate/lib/themes/default.css" rel="stylesheet">
    <link href="/assets/vendor/pickadate/lib/themes/default.date.css" rel="stylesheet">
    <link href="/assets/vendor/pickadate/lib/themes/default.time.css" rel="stylesheet">
    <!--引入wangEditor.css-->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/wangEditor/dist/css/wangEditor.min.css">
@stop

@section('content')
    <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">Posts <small>» Edit Post</small></div>
                @include('admin.partials.errors')
                @include('admin.partials.success')
            <div class="row">
                <!-- Article Content-->
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.post.update', $id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">

                                @include('admin.post._form')

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary btn-lg" name="action" value="continue">
                                                <i class="fa fa-floppy-o"></i>
                                                Save - Continue
                                            </button>
                                            <button type="submit" class="btn btn-success btn-lg" name="action" value="finished">
                                                <i class="fa fa-floppy-o"></i>
                                                Save - Finished
                                            </button>
                                            <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal-delete">
                                                <i class="fa fa-times-circle"></i>
                                                Delete
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
{{-- 确认删除 --}}
    <div class="modal fade" id="modal-delete" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">Please Confirm</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        <i class="fa fa-question-circle fa-lg"></i>
                        Are you sure you want to delete this post?
                    </p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('admin.post.destroy', $id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i> Yes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- CHOSEN-->
    <script src="/assets/vendor/chosen_v1.2.0/chosen.jquery.min.js"></script>
    <!-- Pickadate-->
    <script src="/assets/vendor/pickadate/lib/picker.js"></script>
    <script src="/assets/vendor/pickadate/lib/picker.date.js"></script>
    <script src="/assets/vendor/pickadate/lib/picker.time.js"></script>
    <!-- wangEditor-->
    <script type="text/javascript" src="/assets/vendor/wangEditor/dist/js/wangEditor.min.js"></script>
    
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