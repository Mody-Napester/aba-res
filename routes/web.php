<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use \App\Http\Controllers\LanguagesController;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ActionController;
use \App\Http\Controllers\ScreenController;
use \App\Http\Controllers\GroupController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LookupController;

// Site Languages
Route::get('language/{language}', [LanguagesController::class, 'setLanguage'])->name('language');

// Public
Route::get('/', [PublicController::class, 'index_home'])->name('register');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Dashboard
Route::group([
    'middleware' => 'auth',
    'prefix' => 'dashboard'
], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('action',ActionController::class);
    Route::resource('screen',ScreenController::class);
    Route::resource('group',GroupController::class);
    Route::resource('user',UserController::class);

    Route::resource('lookup',LookupController::class);

});
