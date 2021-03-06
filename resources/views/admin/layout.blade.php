<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- 设置站点标题 --}}
        <title>{{ config('website.title') }} - Admin</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/bitbug_favicon.ico"> 
        <!-- =============== VENDOR STYLES ===============-->
        <!-- FONT AWESOME-->
        <link rel="stylesheet" href="/assets/vendor/fontawesome/css/font-awesome.min.css">
        <!-- SIMPLE LINE ICONS-->
        <link rel="stylesheet" href="/assets/vendor/simple-line-icons/css/simple-line-icons.css">
        <!-- ANIMATE.CSS-->
        <link rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">
        <!-- WHIRL (spinners)-->
        <link rel="stylesheet" href="/assets/vendor/whirl/dist/whirl.css">
        <!-- =============== PAGE VENDOR STYLES ===============-->
        <!-- DATATABLES-->
        <link rel="stylesheet" href="/assets/vendor/datatables-colvis/css/dataTables.colVis.css">
        <link rel="stylesheet" href="/admin/assets/backend/vendor/datatable-bootstrap/css/dataTables.bootstrap.css">

        <!-- =============== BOOTSTRAP STYLES ===============-->
        <link rel="stylesheet" href="/admin/assets/backend/css/bootstrap.css" id="bscss">
        <!-- =============== APP STYLES ===============-->
        <link rel="stylesheet" href="/admin/assets/backend/css/app.css" id="maincss">

        {{-- 该 Blade 指令将会输出继承自该布局的子视图的 styles 区块内容（如果有的话），其目的在于将 CSS 样式文件放到模板顶部。--}}
        @yield('styles')

        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
            @include('admin.partials.topnav')
         <!-- END Top Navbar-->
      </header>

      @if (Auth::check())
      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar">
               <!-- START sidebar nav-->
                @include('admin.partials.navbar')
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
        @endif
      <!-- offsidebar-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul role="tablist" class="nav nav-tabs nav-justified">
                  <li role="presentation" class="active">
                     <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li role="presentation">
                     <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-users fa-lg"></em>
                     </a>
                  </li>
               </ul>
               <!-- Tab panes-->
               <div class="tab-content">
                  <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                     <h3 class="text-center text-thin">Tab 1</h3>
                  </div>
                  <div id="app-chat" role="tabpanel" class="tab-pane fade">
                     <h3 class="text-center text-thin">Tab 2</h3>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
        @yield('content')
      <!-- Page footer-->
      @if (Auth::check())
      <footer>
         <span>&copy; 2016 - FoodForFun</span>
      </footer>
      @endif
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="/assets/vendor/modernizr/modernizr.js"></script>
   <!-- JQUERY-->
   <script src="/assets/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="/assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="/assets/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="/assets/vendor/animo.js/animo.js"></script>
   <!-- PARSLEY表单验证-->
   <script src="/assets/vendor/parsleyjs/dist/parsley.min.js"></script>
   <script type="text/javascript" src="/assets/vendor/parsleyjs/src/i18n/zh_cn.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- DATATABLES-->
   <script src="/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   <script src="/assets/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   <script src="/admin/assets/backend/vendor/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="/admin/assets/backend/vendor/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="/admin/assets/backend/js/app.js"></script>

    @yield('scripts')
    
    </body>

</html>