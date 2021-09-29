<?php

namespace App\Http\Middleware;

use Closure;

use Facade\FlareClient\Http\Response;

use Illuminate\Http\Request;

use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAcesso::create([
            'ip' => $ip,
            'rota' => $rota
        ]);

        // request recebe a requisição do navegador e manipula antes de chegar no servidor
        return $next($request);
        // retorna a resposa do servidor
        // Response('resposta do middleware');
    }
}
