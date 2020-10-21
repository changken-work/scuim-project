<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('member.index', [
            "user" => $user
        ]);
    }

    public function login(){
        return view('member.login');
    }

    public function loginc(Request $request){
        if(Auth::attempt(['name'=>$request->input('username'), 'password' => $request->input('password')])){
            return redirect()->route('member.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function reg(){
        return view('member.reg');
    }

    public function regc(Request $request){
        $customer = new Customer();
        $customer->fullname = $request->input('fullname');
        $customer->phone = $request->input('phone');

        //新增一位客戶
        if($customer->save()){
            $user = new User();
            $user->name = $request->input('username');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            /*
             * customers => 一般使用者
             * admins => 管理者
             * factories => 車廠
             * vendors => 車商
             * */
            $user->userable_id = $customer->id;
            $user->userable_type = 'customers';

            //新增一位使用者
            if($user->save()){
                return redirect()->route('login');
            }
        }
        return redirect()->route('reg');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function viewLogs(){
        $user = Auth::user();
        $customer = $user->userable;
        $cars = $customer->car()->orderBy('viewed_at', 'desc')->get();
        return view('member.viewLogs', [
            "cars" => $cars
        ]);
    }
}
