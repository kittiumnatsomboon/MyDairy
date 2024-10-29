<?php

use App\Http\Controllers\admin\Admin_dasboard as AdminAdmin_dasboard;
use App\Http\Controllers\dashboard__controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\Admin_dasboard;
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

Route::get('/', function () {
    $toppic_title = "หน้าเข้าสู่ระบบ";
    return view('login',compact("toppic_title"));
})->name('/');

Route::get('/Register',function(){
    $toppic_title = "ระบบสมัครสมาชิก";
    return view('register',compact("toppic_title"));
})->name('/sign-up');

Route::resource('/sign_up',Register_controller::class);
Route::resource('/sign_in',login_controller::class);
Route::resource('/dashboard',dashboard_controller::class);
Route::resource('/admin/dashboard',Admin_dasboard::class);