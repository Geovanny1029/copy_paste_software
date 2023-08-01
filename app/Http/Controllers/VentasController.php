<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Carbon\Carbon;


class VentasController extends Controller
{
    /*
     */
   public function index(){
         return view('ventas.index');
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
}
    


