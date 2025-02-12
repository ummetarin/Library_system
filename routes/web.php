<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;

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
Route::get('/req',function(){return view('register');});
// Route::get('/all',function(){
//     return view('Allbook');
// });


// controller
Route::get('/reg', [FormController::class,'show']);
Route::get('/reg', [FormController::class,'handleform']);
Route::get('/all',[Bookcontroller::class,'allbook']);


// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Book Management Routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');  
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');  
Route::post('/books', [BookController::class, 'store'])->name('books.store'); 
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');  
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');  
Route::delete('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');


//book details
Route::get('/books/all', [BookController::class, 'allBooks'])->name('bookdetails.all');
Route::get('/books/{id}/show', [BookController::class, 'show'])->name('bookdetails.show');
Route::get('/books/{id}/buy', [BookController::class, 'buy'])->name('bookdetails.buy');
Route::get('/books/{id}/borrow', [BookController::class, 'borrow'])->name('bookdetails.borrow');



// Service Management Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index'); 
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');  
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');  

