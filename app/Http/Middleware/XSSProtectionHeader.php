<?php

namespace App\Http\Middleware;

use Closure;

class XSSProtectionHeader
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
        $response = $next($request);

        $response->header('X-Xss-Protection', '1; mode=block');

        return $response;
    }
}
