<?php

namespace App\Http\Controllers;

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
        $user->userable_type = 'customers';
        $user->save();

        return redirect()->route('login');
    }
}
