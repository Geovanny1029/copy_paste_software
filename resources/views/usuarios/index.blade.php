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
   
 @vite(['/resources/js/usuarios.js',
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
                        <div class="panel-heading">Administracion de usuarios</div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary" id="adduser">Añadir Usuarios</button>
                                    </div>
                                </div>
  
                            </div>
                            <br>
                            <div class="container-fluid w-100">
                                <table class="table table-striped nowrap table-responsive" style="width:100%" id="usuarios-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>USUARIO</th>
                                        <th>TIPO</th>
                                        <th>FECHA</th>
                                        <th>ESTATUS</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            @include('usuarios.modal_add_user')
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
    Tableuser = $("#usuarios-table").DataTable({
      rowId: "id",
      ajax: {
        url: '/copy_paste_software/public/CargarUsuarios',
        type: 'GET'
      },

      columns: [
        {data : 'id'},
        {data : 'nombre_completo'},
        {data : 'login'},
        {
            data       : null,
            orderable  : false,
            searchable : false,
            render:function(d){
                if(d.tipo == 1){
                    return "ADMIN";
                }else{
                    return "EMPLEADO"
                }
            },
            
        },
        {data : 'fecha_creacion'},
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
        {//acciones
          data       : null,
          searchable : false,
          orderable  : false,
          render : function(d){
          var arr = {'id':d.id,'nombre':d.nombre_completo};
          var btnedit = "";
          if(d.estatus == 1){
          var btnedit = "<button class='btn btn-warning btn-sm' value='1' onclick='editausuario("+JSON.stringify(arr)+")'> <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></button> ";            
            var btnactiv = "<button class='btn btn-danger btn-sm' value='1' onclick='desactivaruser("+d.id+")'> <span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button> ";
          }else{
           var btnactiv = " <button class='btn btn-success btn-sm' value='1' onclick='activaruser("+d.id+")'> <span class='glyphicon glyphicon-ok' aria-hidden='true'></span></button>";
          }


            return btnedit+btnactiv;
          }
        }


      ],
      order: [[ 0, "asc" ]]
    })
});
  

function refreshTableUser(){
  Tableuser.ajax.reload( null, false );
}  

function desactivaruser(id){
Swal.fire({
  title: 'Deseas desactivar a este usuario?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Desactivar',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $.ajax({
        url     : `/copy_paste_software/public/desactivar `,
        type    : 'POST',
        data    : {'id':id},
        success : function(response){
        Swal.fire(
            'Excelente',
            'Usuario Desactivado exitosamente!',
            'success'
        );

            refreshTableUser();
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

function activaruser(id){
Swal.fire({
  title: 'Deseas activar a este usuario?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'Activar',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    $.ajax({
        url     : `/copy_paste_software/public/activar `,
        type    : 'POST',
        data    : {'id':id},
        success : function(response){
        Swal.fire(
            'Excelente',
            'Usuario Activado exitosamente!',
            'success'
        );

            refreshTableUser();
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

function editausuario(d){
    var id = d.id;
    $("#modalUserEdit").modal("show");
    $("#EditarUsuario").val(d.id);
   $.ajax({
        url     : `/copy_paste_software/public/editar `,
        type    : 'POST',
        data    : {'id':id},
        success : function(d){
            $("#nombre_completo_edit").val(d.nombre_completo);
            $("#login_edit").val(d.login);
            $("#tipo_edit").val(d.tipo);

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
