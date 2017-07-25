<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{URL::asset('templetaminton/assets/images/favicon_1.ico')}}">

        <title>Administrador Tienda</title>

        <link href="{{URL::asset('templetaminton/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('templetaminton/assets/css/responsive.css')}}" rel="stylesheet" type="text/css">

        <script src="{{URL::asset('templetaminton/assets/js/modernizr.min.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class="wrapper-page">

            <div class="text-center">
                <a href="index.html" class="logo logo-lg"><i class="md md-equalizer"></i> <span>TIENDA</span> </a>
            </div>

            <form class="form-horizontal m-t-20" action="administrador/login">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Correo">
                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Contraseña">
                        <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Iniciar
                        </button>
                    </div>
                </div>

            </form>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="{{URL::asset('templetaminton/assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/detect.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/fastclick.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/wow.min.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- Custom main Js -->
        <script src="{{URL::asset('templetaminton/assets/js/jquery.core.js')}}"></script>
        <script src="{{URL::asset('templetaminton/assets/js/jquery.app.js')}}"></script>
	
	</body>
</html>