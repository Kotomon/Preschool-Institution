<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->remember_token !== null) {
            return $next($request);
        }

        // Если пользователь не аутентифицирован, перенаправляем на страницу логина
        if (Auth::guest()) {
            return redirect()->guest('/login');
        }

        // Если у пользователя нет токена, отображаем сообщение об ошибке или перенаправляем на страницу приветствия
        abort(403, 'У вас нет доступа к этой странице');
        // или
        // return redirect('/welcome');
    }
}
