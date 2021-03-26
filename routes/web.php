<?php

use App\Http\Controllers\PrimeController;
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

Route::get('/', [PrimeController::class,'home'])->name("home");
Route::get('/auth/login_register', [PrimeController::class,'login'])->name("login_register");
Route::get('/insert_items', [PrimeController::class,'insert_items'])->name("insert_items");
Route::get('/prueba', [PrimeController::class,'prueba'])->name("prueba");
