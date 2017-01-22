<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 19-01-2017
 * Time: 11:29 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;

class LoginAuthMiddleware
{

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $session_has_user = Session::has('user_login');

        if (!$session_has_user)
        {
            return redirect('login');
        }

        return $next($request);
    }

}