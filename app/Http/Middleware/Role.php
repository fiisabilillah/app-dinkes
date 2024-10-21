<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $userRole = $request->user()->role;

        if ($userRole === 'user' && $role !== 'user') {
            return redirect('dashboard');
        } elseif ($userRole === 'super' && $role === 'user') {
            return redirect('/super/dashboard');
        } elseif ($userRole === 'admin' && $role === 'user') {
            return redirect('/admin/dashboard');
        } elseif ($userRole === 'super' && $role === 'admin') {
            return redirect('/super/dashboard');
        } elseif ($userRole === 'admin' && $role === 'super') {
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
}
