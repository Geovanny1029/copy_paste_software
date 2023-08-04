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
    <title>BIENVENIDO COPY AND PASTE</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/bootstrap.min.css') }}"/>
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/metisMenu.min.css') }}"/>
    <!-- Timeline CSS -->

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

   
 @vite(['/resources/js/almacen.js',
 '/resources/js/global-config.js'])

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <i class="fa fa-user fa-fw"></i> {{Auth::user()->nombre_copleto}} <b class="caret"></b>
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
                        <div class="panel-heading">Administracion de Productos</div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary" id="addproduct">Añadir Producto</button>
                                    </div>
                                </div>
  
                            </div>
                            <br>
                            <div class="container-fluid w-100">
                                <table class="table table-striped nowrap table-responsive" style="width:100%" id="almacen-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>PRODUCTO</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO</th>
                                        <th>DISPONIBILIDAD</th>
                                        <th>MARCA/MODELO</th>
                                        <th>FECHA</th>
                                        <th>CODIGO DE BARRAS</th>
                                        <th>ESTATUS</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            @include('almacen.modal_add_almacen')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!-- jQuery -->
<!-- jQuery -->
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
<script>
$( document ).ready(function() {
    Tableinventario = $("#almacen-table").DataTable({
      rowId: "id",
      ajax: {
        url: '/copy_paste_software/public/CargarAlmacen',
        type: 'GET'
      },

      columns: [
    { data: 'id' },
    { data: 'producto' },
    { data: 'cantidad' },
    { data: 'precio' },
    { //estatus vista
            data       : null,
            orderable  : false,
            searchable : false,
            render:function(d){
                if(d.cantidad >= 8 || d.cantidad >=10){
                    return "EN EXISTENCIAS"
                } else if (d.cantidad >=1 && d.cantidad <= 7) {
                    return "POCAS EXISTENCIAS"
                }else{
                    return "NO DISPONIBLE"
                }
            },
            createdCell: function(td,cell,d,row,col){
                if(d.cantidad >= 8 || d.cantidad >=10){
                    $(td).attr('class','btn-success');
                } else if (d.cantidad >=1 && d.cantidad <= 7) {
                    $(td).attr('class','btn-warning');
                }else{
                    $(td).attr('class','btn-danger');
                }
                }
    },
        
    { data: 'marca_modelo' },
    { data: 'fecha' }, 
    { data: 'Codigo_de_Barras' },
    { //estatus vista
            data       : null,
            orderable  : false,
            searchable : false,
            render:function(d){
                if(d.estatus == 1){
                    return "ACTIVO";
                }else{
                    return "INACTIVO"
                }
            },
            createdCell: function(td,cell,d,row,col){
                if (d.estatus == "1") {
                    $(td).attr('class','btn-success');
                }else{
                    $(td).attr('class','btn-danger');
                }
            }
        },
    { //acciones
        data: null,
        searchable: false,
        orderable: false,
        render: function (data) {
            
            var btnedit = "";
            if (data.estatus === 1) {
                var btnedit = `<button class='btn btn-warning btn-sm' value='1' onclick='editaralmacen(${JSON.stringify(data.id)})'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></button>`;
                var btnactiv = ` <button class='btn btn-danger btn-sm' value='1' onclick='desactivaralmacen(${data.id})'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>`;
            } else {
                var btnactiv = `<button class='btn btn-success btn-sm' value='1' onclick='activaralmacen(${data.id})'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></button>`;
            }

            return btnedit + btnactiv;
        }
    }
],
      order: [[ 0, "asc" ]]
    })
});
  

function refreshTablealmacen(){
  Tableinventario.ajax.reload( null, false );
}  



function desactivaralmacen(id){
Swal.fire({
  title: 'Deseas desactivar este Producto?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Desactivar',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $.ajax({
        url     : `/copy_paste_software/public/desactivaralmacen `,
        type    : 'POST',
        data    : {'id':id},
        success : function(response){
        Swal.fire(
            'Excelente',
            'Usuario Desactivado exitosamente!',
            'success'
        );

            refreshTablealmacen();
        },
        error: function(){
        Swal.fire(
            'Error',
            'Ha ocurrido un error revisar!',
            'error'
        );
        }
    });
  } 
})

}

function activaralmacen(id){
Swal.fire({
  title: 'Deseas activar este Producto?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Activar',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $.ajax({
        url     : `/copy_paste_software/public/activaralmacen `,
        type    : 'POST',
        data    : {'id':id},
        success : function(response){
        Swal.fire(
            'Excelente',
            'Usuario Activado exitosamente!',
            'success'
        );

            refreshTablealmacen();
        },
        error: function(){
        Swal.fire(
            'Error',
            'Ha ocurrido un error revisar!',
            'error'
        );
        }
    });
  } 
})
}



function editaralmacen(d){
    var id = d;
    $("#modalProductEdit").modal("show");
    $("#EditarProducto").val(d);
   $.ajax({
        url     : `/copy_paste_software/public/editaralmacen `,
        type    : 'POST',
        data    : {'id':id},
        success : function(d){
            $("#producto_edit").val(d.producto);
            $("#cantidad_edit").val(d.cantidad);
            $("#precio_edit").val(d.precio);
            $("#marca_modelo_edit").val(d.marca_modelo);
            $("#Codigo_de_Barras_edit").val(d.Codigo_de_Barras);

        },
        error: function(){
        Swal.fire(
            'Error',
            'Ha ocurrido un error revisar!',
            'error'
        );
        }
    }); 

}
</script>
</body>
</html>
