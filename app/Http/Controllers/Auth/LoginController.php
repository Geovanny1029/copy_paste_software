<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\licencias;

class LoginController extends Controller
{

        public function login(Request $request){
        $licencia = licencias::find(1);
        $estatus = $licencia->estatus;
        $hoy = Carbon::now()->format('Y-m-d');
        $vigencia = $licencia->fecha_vigencia;
        if($estatus == 1 && ($hoy < $vigencia) ){
           if (Auth::attempt(array('password'=>$request->password,'login'=>$request->nombre_completo),true)){
                if(Auth::user()->tipo == 1){
                    return redirect('/home'); 
                }else{
                    return redirect('/ventas'); 
                }
                // }            
            }else{
             
                return redirect('/');
            }
        }else{
             $licencia = licencias::find(1);
                    $licencia->estatus = 0;
                    $licencia->save();
                return redirect('/');
        }
 
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
