<?php

namespace App\Http\Middleware;

use Closure;
use APIHelpers as API;

class checkApiKey
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
        if(config('credential.api-key') == $request->header('api-key')) return $next($request); 

        return API::fail(403,4001,"authorization failed.");
    }
}
