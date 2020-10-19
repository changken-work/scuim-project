<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/login', [App\Http\Controllers\MemberController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\MemberController::class, 'loginc'])->name('loginc');
Route::get('/reg', [App\Http\Controllers\MemberController::class, 'reg'])->name('reg');
Route::post('/reg', [App\Http\Controllers\MemberController::class, 'regc'])->name('regc');

Route::middleware('auth')->group(function(){
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('member.index');
    Route::get('/query', [App\Http\Controllers\IndexController::class, 'query'])->name('query');
    Route::get('/query/{id}', [App\Http\Controllers\IndexController::class, 'queryItem'])->name('queryItem');
});
