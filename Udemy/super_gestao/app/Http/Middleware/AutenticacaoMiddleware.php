<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $metodo , $perfil)
    {
        //paramentro recebido pela middleware configurado pela rota
        if($perfil == 'amd' && $metodo == 'padrao'){
            "executa metodo";
        }

        if(!true){
            return $next($request);
        }else{
            return Response('Acesso negado , Requer autenticação');
        }

    }
}
