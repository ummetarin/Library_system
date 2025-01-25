<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Home');
});

Route::get('/log', function () {
    return view('Login');
});
Route::get('/allBook', function () {
    return view('AllBook');
});
Route::get('/res', function () {
    return view('Register');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/desh', function () {
    return view('Dashborad');
});
