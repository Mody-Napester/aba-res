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
use \App\Http\Controllers\Monolithic\MediaController;
use \App\Http\Controllers\Monolithic\InstructorController;
use \App\Http\Controllers\Monolithic\CourseController;
use \App\Http\Controllers\Monolithic\SessionController;
use \App\Http\Controllers\Monolithic\LessonController;
use \App\Http\Controllers\Monolithic\StudentController;
use \App\Http\Controllers\Monolithic\BookController;
use \App\Http\Controllers\Monolithic\ProviderController;
use \App\Http\Controllers\Monolithic\SocialController;
use \App\Http\Controllers\Monolithic\TestimonialController;
use \App\Http\Controllers\Monolithic\CurrencyController;
use \App\Http\Controllers\Monolithic\OrderController;
use \App\Http\Controllers\Monolithic\ConsultationController;
use \App\Http\Controllers\Monolithic\CommentController;

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

    Route::resource('currency',CurrencyController::class);
    Route::resource('media',MediaController::class);
    Route::resource('instructor',InstructorController::class);
    Route::resource('course',CourseController::class);
    Route::resource('session',SessionController::class);
    Route::resource('lesson',LessonController::class);
    Route::resource('student',StudentController::class);
    Route::resource('book',BookController::class);
    Route::resource('provider',ProviderController::class);
    Route::resource('social',SocialController::class);
    Route::resource('testimonial',TestimonialController::class);

    Route::resource('consultation',ConsultationController::class);

    Route::resource('comment',CommentController::class);
    Route::resource('setting',ConsultationController::class);

    // orders
    Route::resource('order',OrderController::class);
    Route::resource('lookup',LookupController::class);

});
