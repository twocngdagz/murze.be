<?php

namespace App\Http\Middleware;

use Closure;

class StrictTransportSecurity
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

        if (!config('app.debug')) {
            $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubdomains');
        }

        return $response;
    }
}
