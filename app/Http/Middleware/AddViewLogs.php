<?php

namespace App\Http\Middleware;

use App\Models\ViewLog;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;

class AddViewLogs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route()->parameter('id');
        if(Auth::check() && Auth::user()->userable_type === 'customers' && Car::find($id)){
            $viewLogs = new ViewLog();
            $viewLogs->customer_id = Auth::user()->userable->id;
            $viewLogs->car_id = $id;
            $viewLogs->viewed_at = Carbon::now();
            $viewLogs->save();
        }
        return $next($request);
    }
}
