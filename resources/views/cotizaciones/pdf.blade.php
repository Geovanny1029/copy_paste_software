<!DOCTYPE html>
<html>
<head>
    <title>COTIZACION</title>
    <link rel="stylesheet" type="text/css" href="./css/cabecera.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head><body oncontextmenu='return false' onkeydown='return false'>    
   
</head>
<body oncontextmenu='return false' onkeydown='return false'>

<!-- TITULO Y LOGO -->
<div class="cabecera">
    <div class="logo">
        <img src="./img/papeleria.jpeg" width="120" height="120" align="left"><br>
        <div align="right">Calle 24 No 177 X 29 Y 31 <br> CHICXULUB PTO, 97330</div>
    </div><br>
    <div class="cabecera1">
    <center><b>COTIZACION</b></center>
    </div>
</div>

<!-- PIE DE PAGINA -->
    <div class="pie">
        <center>PAPELERIA Y COMPUTO COPY PASTE</center>
    </div>

<!-- CONTENIDO -->
<div class="contenido">
    <div style="width:100%; background-color: gray;" ><center><b style="color:white;">Persona a cotizar: {{$folio->nombre_cotizacion}}</b></center></div>

        <table class="table table-sm">
            <tr><th >No.cotizacion</th><td> {{$folio->id}}</td></tr>  
            <tr><th class="tarifa">Fecha</th><td>{{$folio->fecha_de_cotizacion}} </td></tr>

        </table>
    


    <div class="nameclient" style="width:100%; text-align: left;"><center><b style="color:white">Detalles de Productos </b></center></div>
           <table class="table table-sm table-sm">
                <tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th></tr>
                <?php $suma = 0;  ?>
                @foreach($cotizacionProductos as $producto)
                <tr>    
                    <th>{{$producto->producto}}</th>
                    <th>${{$producto->precio}} </th>
                    <th>{{$producto->cantidad}} </th>
                    <th>${{$producto->cantidad * $producto->precio }}</th>
                </tr>
                <?php $suma = $suma + ($producto->cantidad * $producto->precio) ?>
                @endforeach
                <tr>
                    <th colspan="3" >Total</th>
                    <th>$ {{$suma}}</th>
                </tr>
                
            </table>
<blockquote>
    <br>
    <br>
    <br>
<h6>Condiciones Generales:</h6>
        <p>* Los precios de los productos cotizados están sujetos a cambio sin previo aviso. Por favor, tenga en cuenta que las tarifas actuales pueden variar debido a fluctuaciones en el mercado y otras circunstancias. Le recomendamos confirmar los precios al momento de realizar su pedido. ¡Estamos aquí para atender cualquier consulta que pueda tener!</p>

</blockquote>

<!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
