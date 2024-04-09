<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventDeletion
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $request->route('Admin') == $user->id) {
            abort(403, 'This cant be deleted.');
        }

        return $next($request);
    }
}
