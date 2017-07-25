<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{URL::asset('templetaminton/assets/images/favicon_1.ico')}}">

        <title>Joyas Lunas</title>

        <link href="{{URL::asset('templetaminton/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/menu.cs')}}s" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('templetaminton/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>


    </head>
    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="/" class="logo"><i class="fa fa-diamond" style="color:red;" aria-hidden="true"></i> <span>Joyeria Diamante Rojo</span> </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                    {{ Session::get('nombre')." ".Session::get('apellido') }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('clientes/perfil')}}"><i class="ti-user m-r-5"></i> Perfil</a></li>
                                    <li><a href="{{url('login/cerrar')}}"><i class="ti-power-off m-r-5"></i> Cerrar Sesion</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->


            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="{{URL::to('administrador')}}"><i class="md md-dashboard"></i>Inicio</a>
                            </li>

                            @if(Session::get('tipo')=="1")
                                <li class="has-submenu">
                                    <a href="#"><i class="md md-dashboard"></i>Catalagos</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('administrador/categorias')}}">Categorias</a></li>
                                        <li><a href="{{url('administrador/productos')}}">Productos</a></li>
                                        <li><a href="{{url('administrador/clientes')}}">Clientes</a></li>
                                        <li><a href="{{url('administrador/comentarios')}}">Comentarios</a></li>
                                    </ul>
                                </li>
                            @endif
                            <li class="has-submenu">
                                <a href="{{URL::to('/')}}"><i class="md md-dashboard"></i>Tienda</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{URL::to('administrador/favoritos')}}"><i class="md md-dashboard"></i>Favoritos</a>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <!-- =======================
             ===== START PAGE ======
             ======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                @yield('content')
                <!-- Page-Title -->





                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                Instituto Tecnologico De Culiacan - 2017
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->



        <!-- jQuery  -->
        <script src="{{URL::asset('templetaminton/assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/detect.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/fastclick.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/wow.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- Custom main Js -->
        <script src="{{URL::asset('templetaminton/assets/js/jquery.core.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/<jquery class="app js"></jquery>')}}"></script>


    </body>
</html>