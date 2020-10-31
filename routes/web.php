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
Route::get('/logout', [App\Http\Controllers\MemberController::class, 'logout'])->name('logout');
Route::get('/reg', [App\Http\Controllers\MemberController::class, 'reg'])->name('reg');
Route::post('/reg', [App\Http\Controllers\MemberController::class, 'regc'])->name('regc');

Route::middleware('auth')->group(function(){
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('member.index');
    Route::get('/query', [App\Http\Controllers\IndexController::class, 'query'])->name('query');
    Route::get('/query/{id}', [App\Http\Controllers\IndexController::class, 'queryItem'])->name('queryItem')->middleware('addviewlogs');
    Route::get('/viewlogs', [App\Http\Controllers\MemberController::class, 'viewLogs'])->name('viewLogs')->middleware('can:customers');

    Route::prefix('/admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

        Route::middleware('can:admins')->group(function(){
            Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
            Route::get('/viewlogslist', [\App\Http\Controllers\Admin\IndexController::class, 'viewLogsList'])->name('admin.viewLogsList');
        });

        Route::middleware('can:factories')->group(function() {
            Route::get('/repairlogslist', [\App\Http\Controllers\Admin\IndexController::class, 'repairLogsList'])->name('admin.repairLogsList');
            Route::get('/signrepairlogs', [\App\Http\Controllers\Admin\IndexController::class, 'signRepairLogs'])->name('admin.signRepairLogs');
            Route::post('/signrepairlogs', [\App\Http\Controllers\Admin\IndexController::class, 'signRepairLogsc'])->name('admin.signRepairLogsc');
        });

        Route::resource('car', \App\Http\Controllers\Admin\CarController::class);
    });
});

Route::prefix('/api')->group(function () {
    Route::get('/getlastrepairlog/{id}', [\App\Http\Controllers\Admin\IndexController::class, 'getLastRepairLog'])->name('api.getlastrepairlog');
});
