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
   
 @vite(['/resources/js/usuarios.js',
 '/resources/js/global-config.js'])

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
                            <a href="/copy_paste_software/public/ "><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- /.row -->
                    
                    <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="panel panel panel-primary">
                        <div class="panel-heading">Nueva Venta</div>
                            <div class="panel-body">
                    <div class="form-group row">
                      <center><label for="ref" class="col-sm-12 col-form-label">Atiende:     <b>{{Auth::user()->nombre_completo}} </b></label></center>
                         
                    </div>
                   
                  <div class="form-row">
                    <table class="table table-hover" id="tabla_conceptos">
                      <tr>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Agregar</th>
                    </tr>
                      <tr id="row1">

                        <td>                          
                            <input type="text" name="codigo[]" style=" text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo1" />
                        </td>
                        <td>
                          <input type="text" name="descripcion[]" placeholder="Descripcion" class="form-control descripcion" id ="descripcion1" />
            
                        </td>
                        <td>
                          <input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad1" />
                          
                        </td>
                        <td>
                          <input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio1" readonly />
                        </td>
                        <td>
                         <div id="total_unidad1"></div>
                         <input type="hidden" class="total_unidad" name="total_precio_unidad1" id="total_precio_unidad1">                                                                        
                        <td>
                          <button type="button" name="addc" id="addc" class="btn btn-success">+</button>
                        </td>
                      </tr>
                    </table>
                    <table class="table table-hover">
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td><td><h4>Total:</h4></td><td><h4><div id="totalconceptos"></div></h4></td>
                      </tr>
                    </table>

                  </div>                               
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

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

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/login/startmin.js') }}"></script>
    <script src="{{ asset('js/login/startmin.js') }}"></script>
    <script type="text/javascript">
        $(".codigo").last().focus();
         var l = 1;
              $(document).on('change', '.codigo', function(){
               
                console.log(l);
                // Obtener el valor del código de barras escaneado
                var dato = $(this).val();

                  $.ajax({
                      url  : '/copy_paste_software/public/getproducto',
                          type : 'POST',
                          data : {'id':dato},
                          success    : function(r){
                            if(r != false){
                                $("#descripcion"+l).val(r.producto);
                                $("#cantidad"+l).val(1);
                                $("#precio"+l).html("<h4>$"+r.precio+"</h4>");
                                $("#precio"+l).val(r.precio    );
                                $("#total_unidad"+l).html("<h4>$ "+r.precio+"</h4>");
                                $("#total_precio_unidad"+l).val(r.precio);
                                l++
                             $('#tabla_conceptos').append(
                                    '<tr id="row'+l+'" class="agregado">'+
                                    '<td><input type="text" name="codigo[]" style=" text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo'+l+'" /></td>'+
                                    '<td> <input type="text" name="descripcion[]" placeholder="Descripcion" class="form-control descripcion" id ="descripcion'+l+'" /></td>'+
                                    '<td><input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad'+l+'" /></td>'+
                                    '<td><input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio'+l+'" readonly /></td>'+
                                    '<td><div id="total_unidad'+l+'"></div><input type="hidden" class="total_unidad" name="total_precio_unidad[]" id="total_precio_unidad'+l+'"></td>'+
                                    '<td><button type="button" name="removec" id="'+l+'" class="btn btn-danger btn_remove">X</button></td></tr>'
                                    );
                             $(".codigo").last().focus();
                             //suma de los conceptos
                                var suma = 0;

                                $(".total_unidad").each(function() {
                                    var valorNumerico = parseFloat($(this).val());
                                    console.log(valorNumerico);
                                    if (!isNaN(valorNumerico)) {
                                        suma += valorNumerico;
                                    }
                                });
                                $("#totalconceptos").html("<h3>$ "+suma+"</h3>");
                            }else{
                                Swal.fire(
                                    'Error',
                                    'No se encontro el producto',
                                    'error'
                                );
                                $("#codigo"+l).val("");
                            }


                      }
                  });
              });

               $(document).on('change', '.cantidad', function(){
                    var palabra = $(this).attr("id");
                    var ultimaLetra = palabra.charAt(palabra.length - 1);
                    
                    var cantidad = $(this).val();
                    var precio = $("#precio"+ultimaLetra).val();
                    var total = precio*cantidad;
                    $("#total_unidad"+ultimaLetra).html("<h4>$ "+total+"</h4>");
                    $("#total_precio_unidad"+ultimaLetra).val(total);

                    var suma = 0;

                    $(".total_unidad").each(function() {
                        var valorNumerico = parseFloat($(this).val());
                        console.log(valorNumerico);
                        if (!isNaN(valorNumerico)) {
                            suma += valorNumerico;
                        }
                    });
                    $("#totalconceptos").html("<h3>$ "+suma+"</h3>");

               });
         
    </script>
</body>
</html>

