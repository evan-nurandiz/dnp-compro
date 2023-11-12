<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class VerifiedAdmin
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
        $session  = $request->session()->get('email');

		if (empty($session)) {
			return redirect('/cms-login');
		}

        $checkUser = User::where('email', $session)->first();

        if (!empty($checkUser)) {
            return $next($request);
        }

        return redirect('/cms-login');
		
    }
}
