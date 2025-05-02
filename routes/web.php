<?php

use App\Http\Controllers\Admin\{AnnouncementController, LoginPageController,LogoutPageController};
use App\Livewire\Components\NavBar;
use App\Livewire\Guest\Home;
use App\Models\Announcement;
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
        Route::get('dashboard', [AnnouncementController::class, 'index'])->name('dashboard');
        Route::post('logout', [LogoutPageController::class, 'logout'])->name('logout');
        Route::post('announcement-create',[AnnouncementController::class, 'announcement_create'])->name('announcement-create');
        Route::put('announcement-update',[AnnouncementController::class, 'announcement_update'])->name('announcement-update');
        Route::put('announcement-show/{id}',[AnnouncementController::class, 'announcement_show'])->name('announcement-show');
        Route::put('announcement-hide/{id}',[AnnouncementController::class, 'announcement_hide'])->name('announcement-hide');
        Route::delete('announcement-delete/{id}',[AnnouncementController::class, 'announcement_delete'])->name('announcement-delete');
    });

    
