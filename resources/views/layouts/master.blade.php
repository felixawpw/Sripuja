<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Sripuja Electronic
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('/css/material-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('/img/sidebar-1.jpg')}}">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                SP
            </a>
            <a href="#" class="simple-text logo-normal">
                Sripuja
            </a>
        </div>
        <div class="sidebar-wrapper">
            @if(Auth::check())
            <div class="user">
                <div class="photo">
                    <img src="{{asset('/img/faces/avatar.jpg')}}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseProfile" class="username">
                        <span>
                            {!! Auth::user()->name !!}
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="collapse" id="collapseProfile">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <ul class="nav">
            @if(Auth::check())
                <li class="nav-item active ">
                    <a class="nav-link" href="{!! route('home') !!}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <!-- Side Bar Barang -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarBarang" id="sideBarang">
                        <i class="material-icons">store</i>
                        <p> 
                            Barang
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarBarang">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('barang.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('barang.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Side Bar Customer -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarCustomer" id="sideCustomer">
                        <i class="material-icons">person</i>
                        <p> 
                            Customer
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarCustomer">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('customer.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('customer.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Side Bar Pegawai -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarPegawai" id="sidePegawai">
                        <i class="material-icons">peoples</i>
                        <p> 
                            Pegawai
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarPegawai">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('pegawai.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('pegawai.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Side Bar Supplier -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarSupplier" id="sideSupplier">
                        <i class="material-icons">domain</i>
                        <p> 
                            Supplier
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarSupplier">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('supplier.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('supplier.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Side Bar Penjualan -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarPenjualan" id="sidePenjualan">
                        <i class="material-icons">receipt</i>
                        <p> 
                            Transaksi Penjualan
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarPenjualan">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('penjualan.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('penjualan.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Side Bar Pembelian -->
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#sideBarPembelian" id="sidePembelian">
                        <i class="material-icons">shopping_cart</i>
                        <p> 
                            Transaksi Pembelian
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="sideBarPembelian">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('pembelian.index') !!}">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> Tampilkan Semua </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{!! route('pembelian.create') !!}">
                                    <i class="material-icons">add</i>
                                    <span class="sidebar-normal"> Tambah Baru </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        <i class="material-icons">shopping_cart</i>
                        <span class="sidebar-normal"> Logout </span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            @else
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="material-icons">shopping_cart</i>
                        <span class="sidebar-normal"> Login </span>
                    </a>
                </li>
            @endif
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#">
                        @if(Auth::check())
                            Dashboard
                        @else
                            Login
                        @endif
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, Specially made by Felix A.
                </div>
            </div>
        </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset('/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{asset('/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset('/js/plugins/jquery.validate.min.js')}}"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset('/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{asset('/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="{{asset('/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{asset('/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{asset('/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{asset('/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset('/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/js/material-dashboard.min.js?v=2.0.2')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  </script>
  @yield('scripts')
</body>

</html>