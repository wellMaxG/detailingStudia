<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
        public function handle($request, Closure $next, ...$roles)
        {
            // Проверка, авторизован ли пользователь
            if (!auth()->check()) {
                return redirect('/home');
            }
        
            // Получение ролей пользователя
            $userRoles = auth()->user()->roles->pluck('slug')->toArray();
        
            // Проверка, имеет ли пользователь хотя бы одну из указанных ролей
            foreach ($roles as $role) {
                if (in_array($role, $userRoles)) {
                    return $next($request);
                }
            }
        
            // Если пользователь не имеет необходимых ролей, перенаправляем его на страницу ошибки
            return abort(403, 'У вас нет доступа к этой странице.');
        }
        
    }

