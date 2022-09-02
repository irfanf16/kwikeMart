<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\App;

class VerifyAPIAccess
{
    public function handle($request, Closure $next)
    {
        if ( $request->header('APP_KEY') == '') {
            errorResponse('0','Something Went Wrong.!',['App key not found.'],200);
        }
        if ( $request->header('APP_KEY') !== env('APP_KEY')) {
            errorResponse('0','Something Went Wrong.!',['Invalid App key.'],200);
        }
            return $next($request);
    }
}
