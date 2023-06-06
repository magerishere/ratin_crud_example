<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @foreach($_menus as $menu)
                    @if(isset($menu['children']))
                        <li @class([
                                 "nav-item",
                                 'menu-open' => \Illuminate\Support\Facades\Route::currentRouteNamed($menu['route_name'])
                            ])>
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    {{$menu['title']}}
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">


                                @foreach($menu['children'] as $item)
                                    <li class="nav-item">
                                        <a href="{{route($item['route_name'])}}" @class([
                                                                            "nav-link",
                                                                         'active' => \Illuminate\Support\Facades\Route::currentRouteNamed($item['route_name'])
                                                                        ])
                                        >
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{$item['title']}}</p>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route($menu['route_name'])}}"
                                @class([
                                    "nav-link",
                                 'active' => \Illuminate\Support\Facades\Route::currentRouteNamed($menu['route_name'])
                                ])
                            >
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    {{$menu['title']}}
                                </p>
                            </a>
                        </li>
                    @endif
                @endforeach


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
