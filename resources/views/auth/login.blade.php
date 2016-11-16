@extends('admin.layout')

@section('content')

<div class="block-center mt-xl wd-xl">
    <!-- START panel-->
    <div class="panel panel-dark panel-flat">
        <div class="panel-heading text-center">
            <a href="#">
                {{--<img src="/admin/assets/backend/img/logo.png" alt="Image" class="block-center img-rounded">--}}
                <span>FoodForFun</span>
            </a>
        </div>
        <div class="panel-body">
            <p class="text-center pv">请登录</p>
            
            @include('admin.partials.errors')

            <form role="form" method="POST" action="{{ url('/auth/login') }}" data-parsley-validate="" novalidate="" class="mb-lg">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group has-feedback">
                    <input id="exampleInputEmail1" name="email" value="{{ old('email') }}" type="email" placeholder="输入登录邮件地址" autocomplete="off" required class="form-control" autofocus>
                    <span class="fa fa-envelope form-control-feedback text-muted"></span>
                </div>
                <div class="form-group has-feedback">
                    <input id="exampleInputPassword1" type="password" name="password" placeholder="密码" required class="form-control">
                    <span class="fa fa-lock form-control-feedback text-muted"></span>
                </div>
                <div class="clearfix">
                    <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                            <input type="checkbox" value="" name="remember">
                            <span class="fa fa-check"></span>记住我
                        </label>
                    </div>
                    <div class="pull-right"><a href="#" class="text-muted">骚年忘记密码了？</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary mt-lg">登录</button>
            </form>
            <p class="pt-lg text-center">加入我们吧！</p><a href="#" class="btn btn-block btn-default">用户注册</a>
        </div>
    </div>
    <!-- END panel-->
    <div class="p-lg text-center">
        <span>&copy;</span>
        <span>2016</span>
        <span>-</span>
        <span>FoodForFun</span>
        <br>
        <span>福多饭</span>
    </div>
</div>

@endsection