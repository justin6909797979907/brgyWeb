<?php

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
    Route::view('/home','home.index')->name('home.index');

    Route::view("/about",'about.index')->name('about.index');

