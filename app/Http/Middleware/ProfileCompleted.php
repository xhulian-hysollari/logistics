<?php

namespace App\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;

class ProfileCompleted
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
        $user = Sentinel::getUser();
        if ($user->profile) {
            return $next($request);
        }
        return redirect()->route('profile')->with('warning', 'You have to complete your profile before proceeding to use the platform.');
    }
}
