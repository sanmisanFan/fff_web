<ul class="nav">
    <!-- Iterates over all sidebar items-->
    <li class="nav-heading ">
        <span>菜单导航</span>
    </li>
    <li @if (Request::is('admin/post*')) class="active" @endif>
        <a href="/admin/post" title="Posts">
            <em class="fa fa-file-o"></em>
            <span>Posts</span>
        </a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
        <a href="/admin/tag">
            <em class="icon-folder"></em>
            <span>Tags</span>
        </a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
        <a href="/admin/upload">
            <em class="icon-folder"></em>
            <span>Uploads</span>
        </a>
    </li>

    <li class=" ">
        <a href="#menuid" title="Menu" data-toggle="collapse">
            <em class="icon-folder"></em>
            <span data-localize="sidebar.nav.menu.MENU">Menu</span>
        </a>
        <ul id="menuid" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">Menu</li>
            <li class=" ">
                <a href="submenu.html" title="Sub Menu">
                    <em></em>
                    <span data-localize="sidebar.nav.menu.SUBMENU">Sub Menu</span>
                </a>
            </li>
        </ul>
    </li>
</ul>