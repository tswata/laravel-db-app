<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\CommentController;


class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $name = $request->input('お名前');
        if (mb_substr($name, -1) !== '様')
        {
        $request->merge(['お名前' => $name . '様']);
        }
        return $next($request);
        // $response = $next($request);
        // $content = $response->content();
        // $pattern = '/<middleware>(.*)<\/middleware>/i';
        // $replace = '<a = href= "http://$1">$1</a>';
        // $content = preg_replace($pattern, $replace, $content);
        // $response->setContent($content);
        // return $response;
    }
    
}
