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

        try{
            $lastRepairLog = Car::find($request->input('car_id'))->factory()->orderBy('repair_logs.created_at', 'desc')->first()->pivot;

            // 如果最後一筆資料的里程數大於輸入的里程數 => 錯誤!
            if($request->input('mileages') <= $lastRepairLog->mileages){
                return redirect()->route('admin.signRepairLogs');
            }

            $repairLog = new RepairLog();
            $repairLog->factory_id = $factory_id;
            $repairLog->car_id = $request->input('car_id');
            $repairLog->current_hash = random_string();
            $repairLog->prev_hash = $lastRepairLog->current_hash; //上一個維修紀錄取其current_hash當prev_hash
            $repairLog->mileages = $request->input('mileages');
            $repairLog->avg_rpm = $request->input('avg_rpm');
            $repairLog->save();
        }catch (\Exception $e){
            $repairLog = new RepairLog();
            $repairLog->factory_id = $factory_id;
            $repairLog->car_id = $request->input('car_id');
            $repairLog->current_hash = random_string();
            $repairLog->prev_hash = random_string();//上一個hash隨機產生
            $repairLog->mileages = $request->input('mileages');
            $repairLog->avg_rpm = $request->input('avg_rpm');
            $repairLog->save();
        }

        return redirect()->route('admin.repairLogsList');
    }

    //取得該車子目前的里程數
    public function getLastRepairLog($id){
        $res = ['mileages' => 0];

        try{
            $lastRepairLog = Car::find($id)->factory()->orderBy('repair_logs.created_at', 'desc')->first()->pivot;
            $res['mileages'] = $lastRepairLog->mileages;
        } catch (\Exception $e){

        }

        return response()->json($res);
    }
}
