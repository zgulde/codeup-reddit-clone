<?php

namespace App\Http\Middleware;

use Closure;

class ProtectPosts
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
        $post = \App\Post::find($request->route('posts'));

        if (! $request->user()->canEdit($post)) {
            return redirect()->action('PostsController@index');
        }

        return $next($request);
    }
}
