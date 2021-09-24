<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class cekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        // dd($levels);
        if(in_array($request->user()->role_user,$levels)){
            return ($next($request));            
        }
        return redirect('/');
        // if($request->user()->role_uers == 'PETUGAS'){
        //     return redirect('petugas.dashboard');
        // }
        // elseif($levels == 'MASYARAKAT'){
        //     return redirect('user.dashboard');
        // }
    }
}
