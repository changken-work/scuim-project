<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\RepairLog;
use App\Models\ViewLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function viewLogsList(){
        $viewLogs = ViewLog::with(['customer', 'car'])->get();
        return view('admin.view-logs-list',[
            'viewLogs' => $viewLogs
        ]);
    }

    public function repairLogsList(){
        $this->authorize('factories');

        $factory_id = Auth::user()->userable->id;

        $repairLogs = RepairLog::with('car')->where('factory_id', $factory_id)->orderBy('created_at', 'desc')->get();

        return view('admin.repair-logs-list', [
            'repairLogs' => $repairLogs
        ]);
    }

    public function signRepairLogs(){
        $this->authorize('factories');

        $cars = Car::all();
        return view('admin.sign-repair-logs',[
            'cars' => $cars
        ]);
    }

    public function signRepairLogsc(Request $request){
        $this->authorize('factories');

        $factory_id = Auth::user()->userable->id;

        $repairLog = new RepairLog();
        $repairLog->factory_id = $factory_id;
        $repairLog->car_id = $request->input('car_id');
        $repairLog->current_hash = random_string();
        $repairLog->prev_hash = random_string();
        $repairLog->mileages = $request->input('mileages');
        $repairLog->save();

        return redirect()->route('admin.repairLogsList');
    }
}
