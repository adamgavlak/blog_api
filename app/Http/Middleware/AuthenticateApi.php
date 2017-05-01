<?php
/**
 * Created by PhpStorm.
 * User: gavlak
 * Date: 01/05/2017
 * Time: 20:16
 */

namespace App\Http\Middleware;

use Closure;

class AuthenticateApi
{
    public function handle($request, Closure $next)
    {
        if ($request->header('X-Api-Key') != getenv('API_KEY'))
            return response('Unauthorized', 401);

        return $next($request);
    }
}