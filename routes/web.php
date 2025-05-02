<?php

use App\Http\Controllers\Admin\{LoginPageController,LogoutPageController};
use App\Livewire\Components\NavBar;
use App\Livewire\Guest\Home;
use Illuminate\Support\Facades\Route;

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
    Route::get('/',Home::class)->name('home');
    Route::middleware('guest')->group(function(){
        Route::view('/home','home.index')->name('home.index');
        Route::view('/login','admin.login')->name('login');
        Route::post('/admin', [LoginPageController::class,'login_store'])->name('login.store');
    });
    Route::view("/about",'about.index')->name('about.index');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/


    Route::middleware('auth')->group(function(){
        Route::view('dashboard', 'admin.dashboard')->name('dashboard');
        Route::post('logout', [LogoutPageController::class, 'logout'])->name('logout');
    });
    
