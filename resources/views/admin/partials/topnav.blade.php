<nav role="navigation" class="navbar topnavbar">
   <!-- START navbar header-->
   {{--<div class="navbar-header">
      <a href="#/" class="navbar-brand">
         <img src="/admin/assets/backend/img/screenshot.png" alt="App Logo" class="img-responsive">
      </a>
   </div>--}}
   <!-- END navbar header-->
   <!-- START Nav wrapper-->
   <div class="nav-wrapper">
      <!-- START Left navbar-->
      <ul class="nav navbar-nav">
         <li>
            <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
            {{-- <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
               <em class="fa fa-navicon"></em>
            </a> --}}

            <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
            <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
               <em class="fa fa-navicon"></em>
            </a>
         </li>
      </ul>
      <!-- END Left navbar-->
      <!-- START Right Navbar-->
      <ul class="nav navbar-nav navbar-right">
         <!-- Search icon-->
         <li>
            <a href="#" data-search-open="">
               <em class="icon-magnifier"></em>
            </a>
         </li>
         <!-- START Offsidebar button-->
         <li>
            <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
               <em class="icon-notebook"></em>
            </a>
         </li>
         @if (Auth::guest())
            <li><a href="/auth/login"><em>Login</em></a></li>
         @else
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                    aria-expanded="false">
                  {{ Auth::user()->name }}
               <span class="caret"></span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="/auth/logout">Logout</a></li>
               </ul>
            </li> 
         @endif
         <!-- END Offsidebar menu-->
      </ul>
      <!-- END Right Navbar-->
   </div>
   <!-- END Nav wrapper-->
   <!-- START Search form-->
   <form role="search" action="search.html" class="navbar-form">
      <div class="form-group has-feedback">
         <input type="text" placeholder="Type and hit enter ..." class="form-control">
         <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
      </div>
      <button type="submit" class="hidden btn btn-default">Submit</button>
   </form>
   <!-- END Search form-->
</nav>