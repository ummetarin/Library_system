<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\DashboardController;

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
Route::get('/books', [BookController::class, 'index'])->name('books.index');  // Show all books
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');  // Form to add a book
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');  // Store a new book
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');  // Edit book form
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');  // Update book
Route::delete('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');  // Delete book

// Service Management Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');  // Show all services
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');  // Form to add a service
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');  // Store a new service

