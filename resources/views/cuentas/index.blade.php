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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://c
        dnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            padding-top: 50px; /* Agrega suficiente espacio para el navbar */
        }
        .panel {
            margin-top: 20px; /* Agrega margen superior a los paneles para separarlos del navbar */
        }
    </style>
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

                    <!-- /.row -->
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel Heading</div>
                            <div class="panel-body">Panel Content</div>
                        </div>
                    </div>
                </div>

             </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>


                <!-- /.container-fluid -->
            


            

            <!-- /#page-wrapper -->

       
 


        <!-- jQuery -->
        <script src="{{ asset('js/login/query.min.js') }}"></script>


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
