<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logoController;
use App\Http\Controllers\petController;
use App\Http\Controllers\vecktorController;
use App\Http\Controllers\posterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\inputdataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

//buat tampilan home

Route::get('/home', [homeController::class, 'home']);

//tampilan logo buat gamabar bagian service
Route::get('/logo', [logoController::class, 'logo']);

//

//tampilan pet buat gamabar bagian service
Route::get('/pet', [petController::class, 'pet']);

//

//tampilan vecktor buat gamabar bagian service
Route::get('/vecktor', [vecktorController::class, 'vecktor']);

//
//tampilan poster buat gamabar bagian service
Route::get('/poster', [posterController::class, 'poster']);

//


//buat route pesan antara admin dan user 

//Route::middleware('auth')->group(function () {
    //Route::get('/pesan', [pesanController::class, 'index'])->name('pesan.index');
    //Route::get('/pesan/create', [pesanController::class, 'create'])->name('pesan.create');
    //Route::post('/pesan', [pesanController::class, 'store'])->name('pesan.store');
    //Route::get('/pesan/{id}', [pesanController::class, 'show'])->name('pesan.show');
//});


// buat dashboard admin



//


Route::get('/dashboard', [dashboardcontroller::class, 'dashboard']);

//


//route buat massege

//Route::middleware('auth')->group(function () {
    //Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    //Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
    //Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    //Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
//});


//

//route input data 

Route::get('/inputdata', [inputdataController::class, 'inputdata'])->name('inputdata');
Route::get('/inputdata/create', [inputdataController::class, 'create'])->name('inputdata.create');
Route::post('/inputdata/store', [inputdataController::class, 'store'])->name('inputdata.store');
Route::get('/inputdata/edit/{id}', [inputdataController::class, 'edit'])->name('inputdata.edit');
Route::put('/inputdata/update/{id}', [inputdataController::class, 'update'])->name('inputdata.update');
Route::delete('/inputdata/destroy/{id}', [inputdataController::class, 'destroy'])->name('inputdata.destroy');

//
//user
Route::get('/vecktor', [inputdataController::class, 'vecktor'])->name('vecktor');
Route::get('/test', [inputdataController::class, 'test'])->name('test');
//


// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proses registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


//


// route midlleware
// Admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'dashboard']);
    // Add other admin routes here
  });
  
  Route::middleware(['auth:user'])->group(function () {
    Route::get('/home', [homeController::class, 'home']);
    // Add other admin routes here
  });


// buar pesan 

Route::middleware(['auth'])->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
});


//






//route pesan midleware
Route::middleware(['auth'])->group(function () {
  Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
  Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
});
//


// carts 


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');


//











Route::get('/', function () {
    return view('welcome');
});
