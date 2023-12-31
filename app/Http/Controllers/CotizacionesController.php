<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Carbon\Carbon;
use App\Models\cotizacion;
use App\Models\Vistas;
use App\Models\cotizacion_producto;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use DataTables;

class CotizacionesController extends Controller
{
    public function index(){
        $productos = Inventario::pluck('id','producto');
         return view('cotizaciones.index')->with('productos',$productos);
    }

    public function pdf($id, Request $request){
       
    $folio = cotizacion::find($id);
    $cotizacionProductos = Vistas::where('folio_cotizacion',$folio->id)->get();
    //$pdf = PDF::loadView('cotizacion.pdf', $data)

   return  PDF::loadView('cotizaciones.pdf', ['cotizacionProductos'=>$cotizacionProductos,'folio'=>$folio])->stream('archivo.pdf');
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

    public function registro_cotizacion(Request $request){
        $nueva_cotizacion = new  cotizacion();
        $nueva_cotizacion->id_usuario = Auth::user()->id;
        $nueva_cotizacion->nombre_cotizacion = $request->nombre_cotizacion;
        $nueva_cotizacion->fecha_de_cotizacion = Carbon::now()->format('Y-m-d');
        $nueva_cotizacion->total = $request->totalconceptos_hidden;
        $nueva_cotizacion->estatus = 1;
        $nueva_cotizacion->save();

        $total_productos = sizeof($request->codigo);
        $id_producto = $request->select_producto_hiden;
        $cantidad = $request->cantidad;
        $precio = $request->precio;

        for ($i=0; $i < $total_productos; $i++){
            $item_cotizacion = new cotizacion_producto();
            $item_cotizacion->folio_cotizacion = $nueva_cotizacion->id;
            $item_cotizacion->id_producto = $id_producto[$i];
            $item_cotizacion->cantidad = $cantidad[$i];
            $item_cotizacion->precio = $precio[$i];
            $item_cotizacion->save();


        }
        return response()->json($nueva_cotizacion);
    }  

    public function cargacotizaciones(){
        return DataTables::of(cotizacion::where('estatus',1)->get())->make(true);
    }
     public function desactivarcotizacion(Request $request){
        $id = $request->id;
        $producto = cotizacion::find($id);
        $producto->estatus = 2;
        $producto->save();
        return true;
    }

    public function activarcotizacion(Request $request){
         $id = $request->id;
        $user = cotizacion::find($id);
        $user->estatus = 1;
        $user->save();
        return true;
    }

}
