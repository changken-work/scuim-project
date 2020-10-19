<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function query(){
        $cars = Car::all();
        return view('query', [
            "cars" => $cars
        ]);
    }

    public function queryItem($id){
        $car = Car::with('factory')->findOrFail($id);
        return view('query-item', [
            "car" => $car
        ]);
    }
}
