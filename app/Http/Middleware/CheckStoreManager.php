<?php

namespace App\Http\Middleware;

use App\Employee;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStoreManager
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
        if(!\Auth::check()){
            return redirect('/login');
        }
        $type = auth()->user()->user_type;
        $id = Auth::user()->id;
        $position = Employee::where('accountsid', $id)->first();
        $type = $position->role;
        if($type == 'storemanager')
            return $next($request);
        else
            return redirect('/home');
    }
}
