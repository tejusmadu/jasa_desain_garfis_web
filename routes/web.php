<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

use App\Http\Controllers\logoController;
use App\Http\Controllers\petController;
use App\Http\Controllers\vecktorController;
use App\Http\Controllers\posterController;

//buat tampilan home

Route::get('/index', [homeController::class, 'index']);

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


Route::get('/', function () {
    return view('welcome');
});
