<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DisableBackBtn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        // Set headers to disable caching
        $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $response->header('Pragma', 'no-cache');
        $response->header('Expires', '0');
        return $response;
    }
}
