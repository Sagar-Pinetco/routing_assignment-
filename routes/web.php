<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class,'show']);
Route::view('/insert', 'insert');
Route::post('/insert', [UserController::class,'insert']);

// Route::post('/', [UserController::class,'show']);
Route::get('update/{id}', [UserController::class,'update'])->whereNumber('id');
Route::post('updated',[UserController::class,'updated']);
Route::get('delete/{id}',[UserController::class,'delete']);
