<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BIENVINEDIO COPY AND PASTE</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/bootstrap.min.css') }}"/>

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/metisMenu.min.css') }}"/>

        <!-- Timeline CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/timeline.css') }}"/>

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/startmin.css') }}"/>

        <!-- Morris Charts CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/morris.css') }}"/>

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://c
        dnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
   
</head>
<body>
          <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Papeleria copy Paste</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="/copy_paste_software/public/home"><i class="fa fa-home fa-fw"></i> Home</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{Auth::user()->nombre_completo}} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">

                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">


            <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Selecciona una opcion</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6" style="width:30%">
                            
                            <div class="panel panel-primary">

                                <div class="panel-heading">
                                    <a href="/copy_paste_software/public/ventas" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Ventas</div>
                                            <div>Registros de Ventas!!!</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" style="width:30%">
                        <div class="panel" style="background-color: #8A2BE2; color: #f5f5f5;">
                                <div class="panel-heading">
                                    <a href="/copy_paste_software/public/cotizaciones" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <div class="huge">Cotizaciones</div>
                                            <div>PEDIDOS ESPECIALES</div>
                                        </div>
                                    </div>
                                </div>

                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" style="width:30%">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <a href="/copy_paste_software/public/usuarios" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">USUARIOS</div>
                                            <div>Alta,Bajas,Edicion de Empleados</div>
                                        </div>
                                    </div>
                                </div>

                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" style="width:30%">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                     <a href="/copy_paste_software/public/almacen" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-archive fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">ALMACEN</div>
                                            <div>Registro de Productos!!!</div>
                                        </div>
                                    </div>
                                </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6" style="width:30%">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <a href="/copy_paste_software/public/cuentas" style="color: #f5f5f5;">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-line-chart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">CUENTAS</div>
                                            <div>Analisis de Ventas!!!</div>
                                        </div>
                                    </div>
                                </div>
                                   
                                </a>
                            </div>
                        </div>
                    </div>
           

                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- /.sidebar -->

            <!-- /#page-wrapper -->

        </div>
 
    <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    toastr.success('¡Bienvenido/a!');
});

   $("#modalUserAd").modal("show");
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>


        <!-- jQuery -->
        <script src="{{ asset('js/login/jquery.min.js') }}"></script>


        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/login/bootstrap.min.js') }}"></script>
      

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/login/metisMenu.min.js') }}"></script>


        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('js/login/raphael.min.js') }}"></script>
        <script src="{{ asset('js/login/morris.min.js') }}"></script>
        <script src="{{ asset('js/login/morris-data.js') }}"></script>


        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/login/startmin.js') }}"></script>
  
</body>
</html>
