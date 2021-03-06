<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('login');
})->middleware('auth');

// demand routes
Route::get('/demands', [PostController::class,'demand'] )->middleware('auth');
Route::post('/demands', [PostController::class,'storeDemand'] )->middleware('auth');
Route::get('/demands/{post}/edit', [PostController::class,'editDemand'])->middleware('auth');
Route::put('/demands/{post}', [PostController::class,'updateDemand'])->middleware('auth');
Route::delete('/demands/{post}', [PostController::class,'destroyDemand'])->middleware('auth');

// offer routes
Route::get('/offers', [PostController::class,'offer'] )->middleware('auth');
Route::post('/offers', [PostController::class,'storeOffer'] )->middleware('auth');
Route::get('/offers/{post}/edit', [PostController::class,'editOffer'])->middleware('auth');
Route::put('/offers/{post}', [PostController::class,'updateOffer'])->middleware('auth');
Route::delete('/offers/{post}', [PostController::class,'destroyOffer'])->middleware('auth');


Auth::routes();

