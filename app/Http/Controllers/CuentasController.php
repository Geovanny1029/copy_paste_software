<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Carbon\Carbon;
use App\Models\venta_folio_producto;
use App\Models\Venta;
use App\Models\Cierre_ventas;
use Illuminate\Support\Facades\Auth;

class CuentasController extends Controller
{
    public function index(){
        $productos = Inventario::pluck('id','producto');
         return view('cuentas.index')->with('productos',$productos);
    }
    public function getproducto(Request $request){
          $id = $request->id;
        $producto = Inventario::where('Codigo_de_Barras',$id)->first();
        $productos = Inventario::all();
        if($producto == null){
         return response()->json(false);
        }else{
         return response()->json(['producto'=>$producto,'productos'=>$productos]);
        } 
    }


    public function getproductos(){
        $productos = Inventario::all();
         return response()->json(['productos'=>$productos]);

    }
    public function getproducto_select(Request $request){
          $id = $request->id;
        $producto = Inventario::where('id',$id)->first();
        $productos = Inventario::all();
        if($producto == null){
         return response()->json(false);
        }else{
         return response()->json(['producto'=>$producto,'productos'=>$productos]);
        } 
    }    

    public function registro_ventas(Request $request){
        $nueva_venta = new  Venta();
        $nueva_venta->id_usuario = Auth::user()->id;
        $nueva_venta->fecha_de_venta = Carbon::now()->format('Y-m-d');
        $nueva_venta->total = $request->totalconceptos_hidden;
        $nueva_venta->status = 1;
        $nueva_venta->save();
       ///formulario
        $total_productos = sizeof($request->codigo);
        $id_producto = $request->select_producto_hiden;
        $cantidad = $request->cantidad;
        $precio = $request->precio;

        for ($i=0; $i < $total_productos; $i++) { 
            //descuento de unidades registradas
            $baja_unidades = Inventario::find($id_producto[$i]);
            $baja_unidades->cantidad = ($baja_unidades->cantidad -$cantidad[$i] );
            $baja_unidades->save();

            //registro de venta por producto
            $item_productos = new venta_folio_producto();
            $item_productos->folio = $nueva_venta->id;
            $item_productos->id_producto = $id_producto[$i];
            $item_productos->cantidad=$cantidad[$i];
            $item_productos->precio=$precio[$i];
            $item_productos->save();
        }

        return response()->json($nueva_venta);
    }

    public function cierre_ventas(Request $request)
    {
        $fecha_cierre = $request->fecha_cierre;
        $usuario = $request->usuario;

        $registros_venta = Venta::where('id_usuario',$usuario)->whereDate('fecha_de_venta', $fecha_cierre)->get();
        if($registros_venta != null ){
            return response()->json($registros_venta);
        }else{
            return false;
        }
    }

    public function registrar_cierre_ventas(Request $request){
        $fecha = $request->fecha;
        $total = $request->total;
        $usuario = Auth::user()->id;

        $registro_cierre = new Cierre_ventas();
        $registro_cierre->id_usuario = $usuario;
        $registro_cierre->total = $total;
        $registro_cierre->fecha_cierre = $fecha;
        $registro_cierre->save();

        $actualiza = Venta::where('id_usuario',$usuario)->whereDate('fecha_de_venta', $fecha)->update(['status'=> '2']);

        return true;
    }

}
