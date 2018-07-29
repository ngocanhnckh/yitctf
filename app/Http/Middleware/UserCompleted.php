<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserCompleted{
    public function handle($request,Closure $next){
        $userID = Auth::user()->id;
        $userLevel = Auth::user()->level_at;

        // if user completed the challenge
        if ($userLevel === 0){
            return $next($request);
        } else
        // if user hasn't completed the challenge
        {
            return redirect('/home');
        }
    }
}