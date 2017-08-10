<?php

namespace App\Http\Middleware;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        if($request->segment(1) == null || !in_array($request->segment(1), config('translatable.locales'))){
////        if (!array_key_exists($request->segment(1), config('translatable.locales'))) {
//
//            // Store segments in array
//            $segment = config('app.locale');
//
//            // Set the default language code as the first segment
//            $segments = array_prepend($segment, config('app.locale'));
////            dd($segments);
//            // Redirect to the correct url
//            return redirect()->to(implode('/', $segments));
//        }
//
//        return $next($request);
    }
}
