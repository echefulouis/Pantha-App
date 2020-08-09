<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach($roles as $role) {
            if($request->user()->hasRole($role))
                return $next($request);
        }
        if (request()->expectsJson()) {
          return response()->json(["error" => "401 | Unauthorized"]);
        }
        if (Request::isMethod('get')) {
            abort(401);
        } else if(Request::isMethod('post')) {
            return redirect('/');
        }
    }
}
