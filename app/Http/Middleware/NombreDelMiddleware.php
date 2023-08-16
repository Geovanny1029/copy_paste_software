<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NombreDelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
{
    if (auth()->check()) { // Verifica si el usuario está autenticado
        return $next($request); // Permítelo pasar a la ruta
    }
    
    return redirect()->route('login'); // Redirige al usuario a la página de inicio de sesión
}

}
