<!DOCTYPE html>
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
    <title>BIENVENIDO COPY AND PASTE</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

     @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/usuarios.js','resources/js/global-config.js'])

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
                @if(Auth::check() && Auth::user()->tipo == 1)
                    <li><a href="/copy_paste_software/public/home"><i class="fa fa-home fa-fw"></i> Home</a></li>
                @endif
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

        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#pestaña2">CIERRE VENTAS GENERAL</a></li>
                </ul>
                <div class="tab-content">
                    <div id="pestaña2" class="tab-pane fade">
                        <h3>Determina el rango de fechas a verificar</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <form>
    <label for="fechaInicio">Fecha de inicio:</label><br>
    <input type="date" class="form-control" id="fecha_inicio_general" name="fecha_inicio_general"><br>
    <label for="fechaFin">Fecha de cierre:</label><br>
    <input type="date" class="form-control" id="fecha_cierre_general" name="fecha_cierre_general">
</form>
                                        <button class="btn btn-primary" id="cerrar_ventas_general" value="{{Auth::user()->id}}">Consultar</button>

                                    </div>
                                </div><br>
                               <div id="tabla_registros_cierre"></div>
                               <div id="btn_registra_cierre"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login/jquery.min.js') }}"></script>


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/login/bootstrap.min.js') }}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/login/metisMenu.min.js') }}"></script>
<!-- Morris Charts JavaScript -->
<script src="{{ asset('js/login/raphael.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/login/startmin.js') }}"></script>
    <script src="{{ asset('js/login/startmin.js') }}"></script>
    <script type="text/javascript">

///cierre de ventas
                   
$('#cerrar_ventas_general').click(function () {
    var fecha_inicio_general = $('[name="fecha_inicio_general"]').val();
    var fecha_cierre_general = $('[name="fecha_cierre_general"]').val();




if( fecha_inicio_general > fecha_cierre_general || fecha_cierre_general < fecha_inicio_general){
    Swal.fire(
            'La fecha inicial no debe ser posterior a la fecha de cierre o viceversa',
            
                        'Revisar',
                        'error'
                    );      
}else{
         $.ajax({
            type: "POST", 
            url:  `/copy_paste_software/public/cierre_ventas_general `,
            data: { 'fecha_inicio_general': fecha_inicio_general,'fecha_cierre_general': fecha_cierre_general },
            success: function (datos) {
                if(datos != false){
                   var table = "<table class='table table-hover'><tr><th>Fecha</th><th>Folio</th><th>Total</th><th>Usuario</th></tr>";

                    //suma total de las vetas
                    var suma = 0;

                    for(var i = 0; i < datos.length; i++){
                     table +='<tr><td>'+datos[i].fecha_de_venta+'</td>'+
                        '<td>'+datos[i].id+'</td>'+
                        '<td>'+datos[i].total+'</td>'+
                        '<td>'+datos[i].id_usuario+'</td></tr>';
                    suma = suma+ datos[i].total;
                        }
                    table += "</table> <h4><b>Total: "+suma+"<b></h4>"
                    $("#tabla_registros_cierre").html(table);


                    var boton = "<button class='btn btn-success' value='"+suma+"' id='cierre_dia'>Cierre dia</button>";
                     $("#btn_registra_cierre").html(boton);
                     
                }else{
                    Swal.fire(
                        'No se encontraron registros de ventas de la fecha seleccionada',
                        'Revisar',
                        'error'
                    );    
                }
            },
            error: function (xhr, status, error) {
                alert("Error al guardar la fecha de cierre: " + error);
            }
        });   
}


});



</script>
</body>
</html>

