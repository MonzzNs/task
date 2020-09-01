<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark scrollmenu">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        {{-- <div class="navbar-header">
            <a class="navbar-brand" href="">
                <h4 style="color: black;">Cafe</h4><h3 style="color: blue">24</h3> 
            </a>
        </div> --}}
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto menu1 scrollbox">
                <!-- This is  -->
                <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <li class="nav-item {{ $activePage == 'Home' ? 'selected' : '' }}" style="margin-left: 60px;">
                    <a href="{{ route('sidebarHome') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Home' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-2px"><i class="fa fa-home"><small style="font-size: 15px"> Home</small></i></h3>
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar2') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Wear' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:2px"><i class="fa fa-male"><small style="font-size: 15px"> Wear</small></i></h3>
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar3') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Cart' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:6px"><i class="fa fa-shopping-cart"><small style="font-size: 15px"> Cart</small></i></h3>
                        {{-- <small class="text-center">CheckOut</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar4') }}" class="nav-link waves-effect waves-light {{ $activePage == 'User' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-group"><small style="font-size: 15px"> User</small></i></h3>
                    {{-- <small class="text-center">User</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar5') }}" class="nav-link waves-effect waves-light {{ $activePage == 'File' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:3px"><i class="fa fa-file-text"><small style="font-size: 15px"> File</small></i></h3>
                    {{-- <small class="text-center">Report</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar6') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Email' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-envelope"><small style="font-size: 15px"> Email</small></i></h3>
                    {{-- <small class="text-center">Shop</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar7') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Chart' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-bar-chart-o"><small style="font-size: 15px"> Chart</small></i></h3>
                    {{-- <small class="text-center">Shop</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar8') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Cloud' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-cloud"><small style="font-size: 15px"> Cloud</small></i></h3>
                    {{-- <small class="text-center">Shop</small> --}}
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar9') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Report' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-file-pdf-o"><small style="font-size: 15px"> Report</small></i></h3>
                    </a>
                </li>
                <li class="nav-item" style="margin-left: 45px;">
                    <a href="{{ route('sidebar10') }}" class="nav-link waves-effect waves-light {{ $activePage == 'Git' ? 'btn btn-primary rounded shadow-lg text-light' : '' }}">
                        <h3 style="margin-bottom: -6px; margin-left:-7px"><i class="fa fa-code-fork"><small style="font-size: 15px"> Git</small></i></h3>
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                {{-- <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li> --}}
            </ul>
        </div>
    </nav>
</header>

@push('js')
    
@endpush