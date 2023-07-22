<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use DataTables;

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
        
     return DataTables::of(User::all())
            ->addIndexColumn()
            ->whitelist([
                'id',
                'tipo_servicio',
                'clave_sat',

            ])
            ->rawColumns(['action'])
            ->make(true);
    }
}
