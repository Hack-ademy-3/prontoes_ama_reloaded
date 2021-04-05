<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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
Route::get('/announcement/new', [HomeController::class,'newAnnouncement'])->name('announcement.new');
Route::post('/announcement/images/upload', [HomeController::class,'uploadImages'])->name('announcement.images.upload');

Route::get('/', [PublicController::class,'index'])->name("home");
Route::get('/announcement/{id}', [PublicController::class,'details'])->name("announcement.details");
Route::get('/category/{name}/{id}/announcements', [PublicController::class,'announcementsByCategory'])->name('category.announcements');
Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');


Route::get('/auth/login_register', [PrimeController::class,'login'])->name("login_register");
Route::get('/insert_items', [PrimeController::class,'insert_items'])->name("insert_items");
Route::get('/prueba', [PrimeController::class,'prueba'])->name("prueba");
Route::get('/new', [PrimeController::class,'new'])->name("new_article");


Route::get('/revisor/home',[RevisorController::class,'index'] )->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.announcement.reject');

