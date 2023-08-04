<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use DataTables;
use Hash;
use Session;
class UsuariosController extends Controller
{
    public function index(){
         return view('usuarios.index');
    }
    

    public function crear(Request $request) {
            $date = Carbon::now();
            $hoy =$date->format('Y-m-d');
        $user = new User();
        $user->nombre_completo = $request->nombre_completo;
        $user->login = $request->login;
        $user->tipo = $request->tipo;
        $user->fecha_creacion = $hoy;
        $user->estatus = 1;
        $user->password = bcrypt($request->password);
        $user->save();
            return $user;
    }

    public function cargarusuarios(){
     return DataTables::of(User::all())->make(true);
    }

    public function desactivar(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->estatus = 2 ;
        $user->save();
        return true;
    }

    public function activar(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->estatus = 1;
        $user->save();
        return true;
    }

    public function editar(Request $request){
        $id = $request->id;
        $usuario = User::find($id);

        return response()->json($usuario);

    }


    public function actualizar($id,Request $request) {
            $date = Carbon::now();
            $hoy =$date->format('Y-m-d');
        $user = User::find($id);
        $user->nombre_completo = $request->nombre_completo_edit;
        $user->login = $request->login_edit;
        $user->tipo = $request->tipo_edit;
        //$user->password = bcrypt($request->password);
        $user->save();
            return $user;
    }
}
