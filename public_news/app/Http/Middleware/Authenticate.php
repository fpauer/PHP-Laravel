<?php

namespace PublicNews\Http\Middleware;


use Illuminate\Support\Facades\Route;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
    	if( 
    			Route::currentRouteAction() != "PublicNews\Http\Controllers\ArticleController@index" &&
    			Route::currentRouteAction() != "PublicNews\Http\Controllers\ArticleController@pdf" 
    	 )
    	{
	        if (Auth::guard($guard)->guest()) {
	            if ($request->ajax() || $request->wantsJson()) {
	                return response('Unauthorized.', 401);
	            } else {
	                return redirect()->guest('login');
	            }
	        }
    	} 

        return $next($request);
    }
}
