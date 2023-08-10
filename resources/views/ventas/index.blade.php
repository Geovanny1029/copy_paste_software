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
                    <li class="active"><a data-toggle="tab" href="#ventaTab">NUEVA VENTA</a></li>
                    <li><a data-toggle="tab" href="#pestaña2">CIERRE VENTAS</a></li>
                </ul>
                <div class="tab-content">
                    <div id="ventaTab" class="tab-pane fade in active">
                        <form id="formventas">
                            <div class="row">
                                <div class="col-lg-8 col-md-offset-2">
                                    <div class="panel panel panel-primary">
                                        <div class="panel-heading">Nueva Venta</div>
                                        <div class="panel-body">
                                            <div class="form-group row">
                                                <center><label for="ref" class="col-sm-6 col-form-label">Atiende:     <b>{{Auth::user()->nombre_completo}} </b></label><div class="btn btn-success" id="lista_productos">Ver productos</div></center>
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
                                                            <input type="text" name="codigo[]" style="text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo1" /> 
                                                        </td>
                                                        <td>
                                                            <select id="select_producto1" name="id_producto[]" class="selectpicker form-control select_producto" data-live-search="true">
                                                                <option value="" disabled selected>Elige una opción</option>
                                                                @foreach( $productos as $key => $value )
                                                                    <option value="{{ $value }}">{{ $key }}</option>
                                                                @endforeach
                                                            </select>
                                                            <input type="hidden" class="select_producto_hiden1" name="select_producto_hiden[]" id="select_producto_hiden1">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad1" />
                                                            <input type="hidden" class="disponibles" name="disponibles" id="disponible1">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio1" readonly />
                                                        </td>
                                                        <td>
                                                            <div id="total_unidad1"></div>
                                                            <input type="hidden" class="total_unidad" name="total_precio_unidad1" id="total_precio_unidad1">
                                                            </td>
                                                        <td>
                                                            <button type="button" name="addc" id="addc" class="btn btn-success">+</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td align="text-center">
                                                                <h3><div id="totalconceptos"></div></h3>
                                                                <div class="btn btn-success" id="registrar_venta">REGISTRAR</div>
                                                                <input type="hidden" name="totalconceptos_hidden" id="totalconceptos_hidden">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @include('ventas.modal_lista_productos')
                    </div>
                    <div id="pestaña2" class="tab-pane fade">
                        <h3>CIERRE DE VENTAS</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" id="fecha_cierre" name="fecha_cierre"><br>
                                        <button class="btn btn-primary" id="cerrar_ventas" value="{{Auth::user()->id}}">Consultar</button>
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
        $(".codigo").last().focus();
         var l = 1;
            //buscar productos con codigo de barras o codigo asignado
            $(document).on('change', '.codigo', function(){  
                // Obtener el valor del código de barras escaneado
                var dato = $(this).val();
                if (dato === "") {
                     Swal.fire(
                     'Por favor proporcione un código de barras',
                     '',
                     'warning'
                    );
                            $("#codigo"+l).val("");
            }
                $.ajax({
                    url  : '/copy_paste_software/public/getproducto',
                    type : 'POST',
                    data : {'id':dato},
                    success    : function(r){
                        if(r == false){
                                producto = false
                        }else{
                            var producto = r.producto;
                        }
                       var productos = r.productos;
                        console.log(r);
                        //si es false es porque no existe el codigo del producto
                        if(producto != false){
                            //si cantidad es 0 es porque no existen unidades disponibles
                            if(producto.cantidad== 0 ){
                                Swal.fire(
                                'El producto ya no esta disponible',
                                'Revisar',
                                'error'
                                );
                                $("#codigo"+l).val("");
                            }else{

                                $("#select_producto"+l).val(producto.id);
                                $("#select_producto"+l).prop("disabled", true);
                                $("#select_producto"+l).selectpicker('refresh');
                                $("#select_producto_hiden"+l).val(producto.id);
                                $("#cantidad"+l).val(1);
                                $("#precio"+l).html("<h4>$"+producto.precio+"</h4>");
                                $("#precio"+l).val(producto.precio    );
                                $("#total_unidad"+l).html("<h4>$ "+producto.precio+"</h4>");
                                $("#total_precio_unidad"+l).val(producto.precio);
                                $("#disponible"+l).val(producto.cantidad);
                                $("#id_producto"+l).val(producto.id);
                                $("#codigo"+l).prop("readonly", true);
                                

                                l++

                             $('#tabla_conceptos').append(
                                    '<tr id="row'+l+'" class="agregado">'+
                                    '<td><input type="text" name="codigo[]" style=" text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo'+l+'" /></td>'+
                                    '<td> <select name="id_producto[]"  class="form-control select_producto" id ="select_producto'+l+'" data-live-search="true"/></select><input type="hidden" class="select_producto_hiden'+l+'" name="select_producto_hiden[]" id="select_producto_hiden'+l+'"></td>'+
                                    '<td><input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad'+l+'" /></td>'+
                                    '<input type="hidden" class="disponibles" name="disponibles" id="disponible'+l+'">'+
                                    '<td><input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio'+l+'" readonly /></td>'+
                                    '<td><div id="total_unidad'+l+'"></div><input type="hidden" class="total_unidad" name="total_precio_unidad[]" id="total_precio_unidad'+l+'"></td>'+
                                    '<td><button type="button" name="removec" id="'+l+'" value="'+l+'" class="btn btn-danger btn_remove">X</button></td></tr>'
                                    );

                                var option = "<option value='' disabled selected>Elige una opción</option>";
                                for(var i = 0; i < productos.length; i++){
                                    option +="<option value='"+productos[i].id+"'>"+productos[i].producto+"</option>";
                                }
                                $("#select_producto"+l).html(option);
                                $("#select_producto"+l).selectpicker();
                                 $(".codigo").last().focus();
                                //suma de los conceptos
                                var suma = 0;

                                $(".total_unidad").each(function() {
                                    var valorNumerico = parseFloat($(this).val()); 
                                    if (!isNaN(valorNumerico)) {
                                        suma += valorNumerico;
                                    }
                                });
                                $("#totalconceptos").html("<b>Total: $ "+suma+"</b>");
                               $("#totalconceptos_hidden").val(suma);
                            }
                        }else{
                            Swal.fire(
                                'No se encontro el producto',
                                'Revisar',
                                'error'
                            );
                            $("#codigo"+l).val("");
                        }
                    }
                });
            });
//suma de cantidad + precio del producto
    $(document).on('change', '.cantidad', function(){
                    var palabra = $(this).attr("id");
                    //ultima letra se refiere al numero de la r
                    var ultimaLetra = palabra.charAt(palabra.length - 1);
                    var cantidad = $(this).val();
                    var disponibilidad = $("#disponible"+ultimaLetra).val();
                    if(cantidad < disponibilidad){
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
                        $("#totalconceptos").html("<b>Total: $ "+suma+"</b>");
                        $("#totalconceptos_hidden").val(suma);
                    }else{
                        Swal.fire(
                            ' unidades disponiles: '+disponibilidad  ,
                            'No existen muchas unidades',
                            'error'
                        );
                         var cantidad_dis = $(this).val(disponibilidad);
                         var cantidad = $("#cantidad"+ultimaLetra).val();
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
                        $("#totalconceptos").html("<b>Total: $ "+suma+"</b>");
                        $("#totalconceptos_hidden").val(suma);
                    }
    });

//quitar productos
    $(document).on('click', '.btn_remove', function(){
            event.preventDefault();
            var opcion = confirm("Deseas eliminar este registro?");
            if (opcion == true) {
                var id = $(this).val();
                $('#row'+id+'').remove();
                var suma = 0;

                    $(".total_unidad").each(function() {
                        var valorNumerico = parseFloat($(this).val());
                        console.log(valorNumerico);
                        if (!isNaN(valorNumerico)) {
                            suma += valorNumerico;
                        }
                    });
                    $("#totalconceptos").html("<b>Total: $ "+suma+"</b>");
                    $("#totalconceptos_hidden").val(suma);
            } 

    });
//agregar otro item
    $("#addc").click(function(){
        l++

        $('#tabla_conceptos').append(
            '<tr id="row'+l+'" class="agregado">'+
            '<td><input type="text" name="codigo[]" style=" text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo'+l+'" /></td>'+
            '<td> <select name="id_producto[]"  class="form-control select_producto" id ="select_producto'+l+'" data-live-search="true"/></select></td>'+
            '<td><input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad'+l+'" /></td>'+
            '<td><input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio'+l+'" readonly /></td>'+
             '<td><div id="total_unidad'+l+'"></div><input type="hidden" class="total_unidad" name="total_precio_unidad[]" id="total_precio_unidad'+l+'"></td>'+
            '<td><button type="button" name="removec" id="'+l+'" value="'+l+'" class="btn btn-danger btn_remove">X</button></td></tr>'
        );

        var id = "1"
        $.ajax({
            url     : `/copy_paste_software/public/getproducto `,
            type    : 'POST',
            data    : {'id':id},
            success : function(r){
                productos = r.productos;
                var option = "<option value='' disabled selected>Elige una opción</option>";
                for(var i = 0; i < productos.length; i++){
                    option +="<option value='"+productos[i].id+"'>"+productos[i].producto+"</option>";
                }
                $("#select_producto"+l).html(option);
                $("#select_producto"+l).selectpicker();
            },
            error: function(){

                $('form').trigger("reset");
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserAd").modal('hide');
            }
        });        
         $(".codigo").last().focus();
    });
        
// listar productos en modal
$("#lista_productos" ).on( "click", function() {
        event.preventDefault();
    Tablaproductos = $("#lista-table-productos").DataTable({
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
    { data: 'Codigo_de_Barras' },
   
],
      order: [[ 0, "asc" ]]
    })
   $("#modalListaProducto").modal("show"); 
} );
                
//registrar nuevas ventas   
$("#registrar_venta").on( "click", (e) => {
    event.preventDefault();

 
   var campocodigo= $(".codigo").filter(function() {
      return $(this).val().trim() === ""; // Filtra los campos vacíos
    });

   var campocantidad= $(".cantidad").filter(function() {
      return $(this).val().trim() === ""; // Filtra los campos vacíos
    });


    if(campocodigo.length>0 || campocantidad.length>0 ){
        alert("Falta llenar datos revisar");
    }else{
    let form  = $("#formventas");
        $.ajax({
            url     : `/copy_paste_software/public/registro_ventas `,
            type    : 'POST',
            data    : form.serialize(),
            beforeSend : function(){
                $("#registrar_venta").attr('disabled',true).text("Cargando...");
            },
            success : function(datos){
                var total_venta = $("#totalconceptos_hidden").val();
                Swal.fire({
                  title: '<h2>Folio: '+datos.id+'<br><b> Total Venta: $'+total_venta+'</b></h2><br>Introduce pago',
                  input: 'text',
                  inputAttributes: {
                    autocapitalize: 'off'
                  },
                  showCancelButton: true,
                  confirmButtonText: 'Cambio',
                  showLoaderOnConfirm: true,
                  preConfirm: (pago) => {
                    var cambio = pago - total_venta;
                    return cambio;
                  },
                  allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                  if (result.isConfirmed) {
                    Swal.fire({
                      title: `<h2><b>cambio:$${result.value}</b></h2>`
                    })
                    setTimeout(function() {
            location.reload();
        }, 5000); // 5000 milisegundos = 5 segundos
                  }
                })
            },
            error: function(){

                $('form').trigger("reset");
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserAd").modal('hide');
            }
        });        
    }

 
});

//buscar productos con select
$(document).on('change', '.select_producto', function(){ 
    var valor_select = $(this).val();
        $.ajax({
            url     : `/copy_paste_software/public/getproducto_select `,
            type    : 'POST',
            data    : {'id':valor_select},
            success : function(r){
                var producto = r.producto;
                var productos = r.productos;
                        
                //si es false es porque no existe el codigo del producto
                if(producto != false){
                    //si cantidad es 0 es porque no existen unidades disponibles
                    if(producto.cantidad== 0){
                        Swal.fire(
                            'El producto ya no esta disponible',
                            'Revisar',
                            'error'
                        );
                        $("#codigo"+l).val("");
                    }else{
                        $("#codigo"+l).val(producto.Codigo_de_Barras);
                        $("#cantidad"+l).val(1);
                        $("#precio"+l).html("<h4>$"+producto.precio+"</h4>");
                        $("#precio"+l).val(producto.precio    );
                        $("#total_unidad"+l).html("<h4>$ "+producto.precio+"</h4>");
                        $("#total_precio_unidad"+l).val(producto.precio);
                        $("#disponible"+l).val(producto.cantidad);
                        $("#id_producto"+l).val(producto.id);
                        $("#select_producto_hiden"+l).val(producto.id);
                        $("#codigo"+l).prop("readonly", true);
                        $("#select_producto"+l).prop('disabled',true);
                        $("#select_producto"+l).selectpicker('refresh');
                        l++

                        $('#tabla_conceptos').append(
                        '<tr id="row'+l+'" class="agregado">'+
                        '<td><input type="text" name="codigo[]" style=" text-transform: uppercase;" placeholder="Codigo" class="form-control codigo" id ="codigo'+l+'" /></td>'+
                        '<td> <select name="id_producto[]"  class="form-control select_producto" id ="select_producto'+l+'" data-live-search="true"/></select><input type="hidden" class="select_producto_hiden1" name="select_producto_hiden[]" id="select_producto_hiden'+l+'"></td>'+
                        '<td><input type="number" name="cantidad[]" placeholder="Cantidad" class="form-control cantidad" id ="cantidad'+l+'" /></td>'+
                        '<input type="hidden" class="disponibles" name="disponibles" id="disponible'+l+'">'+
                        '<td><input type="number" name="precio[]" placeholder="precio" class="form-control cantidad" id ="precio'+l+'" readonly /></td>'+
                        '<td><div id="total_unidad'+l+'"></div><input type="hidden" class="total_unidad" name="total_precio_unidad[]" id="total_precio_unidad'+l+'"></td>'+
                        '<td><button type="button" name="removec" id="'+l+'" value="'+l+'" class="btn btn-danger btn_remove">X</button></td></tr>'
                        );
                        var option = "<option value='' disabled selected>Elige una opción</option>";
                        for(var i = 0; i < productos.length; i++){
                            option +="<option value='"+productos[i].id+"'>"+productos[i].producto+"</option>";
                        }
                        $("#select_producto"+l).html(option);
                        $("#select_producto"+l).selectpicker();
                            $(".codigo").last().focus();
                        //suma de los conceptos
                        var suma = 0;

                        $(".total_unidad").each(function() {
                            var valorNumerico = parseFloat($(this).val()); 
                            if (!isNaN(valorNumerico)) {
                                suma += valorNumerico;
                            }
                        });
                         $("#totalconceptos").html("<b>Total: $ "+suma+"</b>");
                        $("#totalconceptos_hidden").val(suma);
                    }
                }else{
                            Swal.fire(
                                'No se encontro el producto',
                                'Revisar',
                                'error'
                            );
                            $("#codigo"+l).val("");
                }
            },
            error: function(){

                $('form').trigger("reset");
                $("#GuardarUsuario").attr('disabled',false).text("Guardar");
                $("#modalUserAd").modal('hide');
            }
        });  

});

///cierre de ventas
                   
$('#cerrar_ventas').click(function () {
    var usuario = $("#cerrar_ventas").val();
    var fecha_cierre = $('[name="fecha_cierre"]').val();

        $.ajax({
            type: "POST", 
            url:  `/copy_paste_software/public/cierre_ventas `,
            data: { 'fecha_cierre': fecha_cierre,'usuario':usuario },
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

});

$(document).on('click', '#cierre_dia', function(){ 

    var total = $("#cierre_dia").val();
    var fecha = $("#fecha_cierre").val();
    Swal.fire({
      title: 'Deseas cerrar y registrar la venta del dia seleccionado?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Si',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
            url     : `/copy_paste_software/public/registrar_cierre_ventas `,
            type    : 'POST',
            data    : {'total':total,'fecha':fecha},
            success : function(response){
            Swal.fire(
                'Excelente',
                '<h2>se registro el cierre  total : $'+total+'</h2>',
                'success'
            );

                $("#tabla_registros_cierre").empty();
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


});


</script>
</body>
</html>

