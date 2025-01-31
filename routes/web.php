<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Bookcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// creating routes
Route::get('/',function(){return view('Home');});
Route::get('/about',function(){return view('About');});
Route::get('/log',function(){return view('login');});
Route::get('/res',function(){return view('register');});
// Route::get('/all',function(){
//     return view('Allbook');
// });


// controller
Route::get('/mess', [FormController::class, 'show']);
Route::get('/all',[Bookcontroller::class,'allbook']);

