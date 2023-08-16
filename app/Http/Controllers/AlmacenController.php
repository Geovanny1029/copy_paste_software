<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Exports\ProductosExport;
use App\Models\Venta;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;
class AlmacenController extends Controller
{
    public function index(){
         return view('almacen.index');
    }

    public function crear(Request $request) {
            $date = Carbon::now();
            $hoy =$date->format('Y-m-d');
        
        $inventario = new Inventario();
        $inventario->producto = $request->producto;
        $inventario->cantidad = $request->cantidad;
        $inventario->precio = $request->precio;
        $inventario->marca_modelo = $request->marca_modelo;
        $inventario->fecha = $hoy;
        $inventario->Codigo_de_Barras = $request->Codigo_de_Barras;
        $inventario->estatus = 1; 
        $inventario->save();
            return $inventario;
    }

    public function cargaralmacen(){
     return DataTables::of(Inventario::all())->make(true);
    }

    public function desactivar(Request $request){
        $id = $request->id;
        $inventario = Inventario::find($id);
        $inventario->estatus = 2;
        $inventario->save();
        return true;
    }

    public function activar(Request $request){
        $id = $request->id;
        $inventario = Inventario::find($id);
        $inventario->estatus = 1;
        $inventario->save();
        return true;
    }

    public function editar(Request $request){
    
        $id = $request->id;
        $producto = Inventario::find($id);

        return response()->json($producto);

    }


    public function actualizar($id,Request $request) {
            $date = Carbon::now();
            $hoy =$date->format('Y-m-d');
        
        $inventario = Inventario::find($id);
        $inventario->producto = $request->producto_edit;
        $inventario->cantidad = $request->cantidad_edit;
        $inventario->precio = $request->precio_edit;
        $inventario->marca_modelo = $request->marca_modelo_edit;
        $inventario->Codigo_de_Barras = $request->Codigo_de_Barras_edit;
    
        //$user->password = bcrypt($request->password);
        $inventario->save();
            return $inventario;
    }

    public function ExportarProductos(){
        return Excel::download(new ProductosExport,'Productos.xlsx');
    }
}
