<!DOCTYPE html>
<html>
<head>
    <title>Cotización de Útiles Escolares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #428bca;
            margin-top: 80px;
            margin-bottom: 20px;
        }

        header {
            display: flex;
            align-items: center;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 100px;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .blue-line {
            border-bottom: 8px solid #428bca;
            width: 100%;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="./img/papeleria.jpeg" class="logo">
        <h1>COTIZACIÓN DE ÚTILES ESCOLARES</h1>
         <div class="blue-line"></div>
    </header>
    
 <!-- Agregar la línea azul después del encabezado -->

    <p>PERSONA A COTIZAR: {{$folio->nombre_cotizacion}}</p> <!-- Contenido que aparecerá por debajo del borde y arriba de la tabla -->
    
    <table>
        <thead>
            <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO UNITARIO</th>
                <th>IMPORTE</th>
            </tr>
        </thead>
        <tbody>
           <?php $suma = 0;  ?>
                @foreach($cotizacionProductos as $producto)
                <tr>
                    <td>{{ $producto->producto }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>${{ number_format($producto->cantidad * $producto->precio, 2) }}</td>
                </tr>
            <?php $suma = $suma + ($producto->cantidad * $producto->precio) ?>
            @endforeach
        </tbody>
                        <tr>
                    <th colspan="3" >TOTAL A PAGAR:</th>
                    <th>$ {{$suma}}</th>
                </tr>
    </table>

    <footer>
        <p>Contáctanos: corre@copy&paste.com | Términos y Condiciones aplican</p>
    </footer>
     <p>* Los precios de los productos cotizados están sujetos a cambio sin previo aviso. Por favor, tenga en cuenta que las tarifas actuales pueden variar debido a fluctuaciones en el mercado y otras circunstancias. Le recomendamos confirmar los precios al momento de realizar su pedido. ¡Estamos aquí para atender cualquier consulta que pueda tener!</p>
</body>
</html>