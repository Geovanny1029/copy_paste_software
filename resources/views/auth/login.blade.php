<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Copy Paste control</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/bootstrap.min.css') }}"/>

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/metisMenu.min.css') }}"/>
   
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/startmin.css') }}">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login/font-awesome.min.css') }}">
      

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Incia Sesion</h3>
                        </div>
                        <div class="panel-body">
                            <form  method="POST" id="formulario_accesso" action="{{ route('login') }}   ">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" id="password" placeholder="text" name="nombre_completo" type="text" value=""> 
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-success" id="enviar_credenciales">ENTRAR</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <!-- jQuery -->
        <script src="{{ asset('js/login/jquery.min.js') }}"></script>
       
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/login/bootstrap.min.js') }}"></script>
       
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/login/metisMenu.min.js') }}"></script>
        
      
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/login/startmin.js') }}"></script>

       <script src="{{ asset('js/login/acciones.js') }}"></script>


    </body>

</html>
