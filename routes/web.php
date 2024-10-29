<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register_controller;
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