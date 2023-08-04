<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Carbon\Carbon;
use App\Models\VentaFolioProducto;
use App\Models\Venta;
use Illuminate\Support\Facades\Auth;


class VentasController extends Controller
{
    /*
     */
   public function index(){
        $productos = Inventario::pluck('id','producto');
         return view('ventas.index')->with('productos',$productos);
    }

    public function getproducto(Request $request){
          $id = $request->id;
        $producto = Inventario::where('Codigo_de_Barras',$id)->first();
        if($producto == null){
         return response()->json(false);
        }else{
         return response()->json($producto);
        } 
    }

    public function registro_ventas(Request $request){
        $nueva_venta = new Venta();
        $nueva_venta->id_usuario = Auth::user()->id;
        $nueva_venta->fecha_de_venta = Carbon::now()->format('Y-m-d');
        $nueva_venta->total = $request->totalconceptos_hidden;
        $nueva_venta->status = 1;
        $nueva_venta->save();

        $total_productos = sizeof($request->codigo);
        $id_producto = $request->id_producto;
        $cantidad = $request->cantidad;
        $precio = $request->precio;

        for ($i=0; $i < $total_productos; $i++) { 
            //descuento de unidades registradas
            $baja_unidades = Inventario::find($id_producto[$i]);
            $baja_unidades->cantidad = ($baja_unidades->cantidad -$cantidad[$i] );
            $baja_unidades->save();

            //registro de venta por producto
            $item_productos = new VentaFolioProducto();
            $item_productos->folio = $nueva_venta->id;
            $item_productos->id_producto = $id_producto[$i];
            $item_productos->cantidad=$cantidad[$i];
            $item_productos->precio=$precio[$i];
            $item_productos->save();
        }

        return true;
    }
}
    


