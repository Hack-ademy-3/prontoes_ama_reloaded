<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\PublicController;

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
Route::post('/announcement/create', [HomeController::class,'createAnnouncement'])->name('announcement.create');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/announcement/new', [HomeController::class,'newAnnouncement'])->name('announcement.new');
Route::get('/announcement/{id}', [HomeController::class,'details'])->name("announcement.details");



Route::get('/', [PublicController::class,'home'])->name("home");
Route::get('/auth/login_register', [PrimeController::class,'login'])->name("login_register");
Route::get('/insert_items', [PrimeController::class,'insert_items'])->name("insert_items");
Route::get('/prueba', [PrimeController::class,'prueba'])->name("prueba");
Route::get('/new', [PrimeController::class,'new'])->name("new_article");
Route::get('/category/{name}/{id}/announcements', [PublicController::class,'announcementsByCategory'])->name('category.announcements');

Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');