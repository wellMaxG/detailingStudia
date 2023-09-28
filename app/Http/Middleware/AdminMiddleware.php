<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
            // Проверка, авторизован ли пользователь
                if (auth()->check()) {
                    // Проверка роли пользователя (здесь "admin" - роль администратора)
                    if (auth()->user()->role === 'admin') {
                        return $next($request); // Пользователь является администратором, продолжаем выполнение запроса
                    }
                }
        
                // Пользователь не является администратором, перенаправляем его на страницу ошибки или куда-либо еще
                return abort(403, 'У вас нет доступа к этой странице.');
            }
        }

