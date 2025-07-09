<?php

use App\Http\Controllers\Admin\AddNewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\FlareMiddleware\AddNotifierName;

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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('news')->name('news.')->group(function(){
       Route::get('/',[AddNewsController::class,'index'])->name('index');
       Route::post('/',[AddNewsController::class,'store'])->name('store');
       Route::get('/create',[AddNewsController::class,'create'])->name('create');
       Route::get('/{id}',[AddNewsController::class,'edit'])->name('edit');
       Route::post('/{id}',[AddNewsController::class,'update'])->name('update');
       Route::delete('/{id}',[AddNewsController::class,'delete'])->name('delete');
    });
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('loginForm');
