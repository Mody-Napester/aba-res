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
use \App\Http\Controllers\Monolithic\LookupController;
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
use \App\Http\Controllers\Monolithic\CertificateController;
use \App\Http\Controllers\Monolithic\QuizController;
use \App\Http\Controllers\Monolithic\QuestionController;
use \App\Http\Controllers\Front\PublicAuthController;
use \App\Http\Controllers\Front\PublicStudentController;
use \App\Http\Controllers\Front\PublicCourseController;
use \App\Http\Controllers\Front\PublicInstructorController;
use \App\Http\Controllers\Front\PublicConsultationController;

// Site Languages
Route::get('language/{language}', [LanguagesController::class, 'setLanguage'])->name('language');

// Public
Route::get('public/auth', [PublicAuthController::class, 'auth'])->name('public.auth.show');
Route::post('public/login', [PublicAuthController::class, 'login'])->name('public.front.login');
Route::post('public/register', [PublicAuthController::class, 'register'])->name('public.front.register');

// Authed Front
Route::group([
    'middleware' => 'auth',
    'prefix' => 'public'
], function (){
    Route::get('student/profile', [PublicStudentController::class, 'profile'])->name('public.student.profile');
    Route::get('student/courses', [PublicStudentController::class, 'courses'])->name('public.student.courses');
    Route::get('student/certificates', [PublicStudentController::class, 'certificates'])->name('public.student.certificates');
    Route::get('student/quizzes', [PublicStudentController::class, 'quizzes'])->name('public.student.quizzes');
    Route::get('student/orders', [PublicStudentController::class, 'orders'])->name('public.student.orders');
});

Route::get('/', [PublicController::class, 'index_home'])->name('public.home.index');
Route::get('/about-us', [PublicController::class, 'index_about'])->name('public.about.index');
Route::get('/for-parents', [PublicController::class, 'index_for_parent'])->name('public.parent.index');
Route::get('/for-professionals', [PublicController::class, 'index_for_professional'])->name('public.professional.index');
Route::get('/for-organizations', [PublicController::class, 'index_for_organization'])->name('public.organization.index');
Route::get('/resources', [PublicController::class, 'index_resource'])->name('public.resource.index');
Route::get('/contact-us', [PublicController::class, 'index_contact'])->name('public.contact.index');

Route::get('/cart', [PublicController::class, 'index_cart'])->name('public.cart.index');

Route::get('/course', [PublicCourseController::class, 'index'])->name('public.course.index');
Route::get('/course/{course}', [PublicCourseController::class, 'show'])->name('public.course.show');

Route::get('/instructor/{course}', [PublicInstructorController::class, 'show'])->name('public.instructor.show');

Route::get('/book', [PublicController::class, 'index_book'])->name('public.book.index');
Route::get('/book/{book}', [PublicController::class, 'show_book'])->name('public.book.show');

Route::get('/consultation', [PublicConsultationController::class, 'create'])->name('public.consultation.create');
Route::post('/consultation', [PublicConsultationController::class, 'store'])->name('public.consultation.store');

// Auth
Route::group([
    'prefix' => 'dashboard'
], function (){
    Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
});

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

    Route::resource('certificate',CertificateController::class);
    Route::resource('quiz',QuizController::class);
    Route::resource('question',QuestionController::class);

    Route::resource('comment',CommentController::class);
    Route::resource('setting',ConsultationController::class);

    // orders
    Route::resource('order',OrderController::class);
});
