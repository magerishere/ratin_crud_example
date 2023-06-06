<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{$_title ?? 'Dashboard'}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    @if(isset($_activeMenu['breadcrumbs']))
                        @foreach($_activeMenu['breadcrumbs'] as $breadcrumb)
                            <li class="breadcrumb-item active">
                                @if(isset($breadcrumb['route_name']))
                                    <a href="{{$breadcrumb['route_name']}}">{{$breadcrumb['title']}}</a>
                                @else
                                    {{$breadcrumb['title']}}
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
