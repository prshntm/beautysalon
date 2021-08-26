<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mainpage', [HomeController::class, 'index']);

Route::put('/user/{id}/{name}', function ($id, $name) {
    return 'ID: '.$id.'. Name: '.$name;
});

//портфолио
//Route::get('/portfolio', [GalleryController::class, 'viewgallery'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'sendtogallery'])->name('portfolio');
//Route::get('/portfolio', [GalleryController::class, 'viewgallery'])->name('portfolio');

//отзывы
Route::post('/portfolio/{id}', [PortfolioController::class, 'postFeedback'])->name('postfeedback')->middleware('auth');

//прайс-лист
Route::get('/servicelist', [ServiceController::class, 'serviceList']);
Route::get('/servicelist/{id}', [ServiceController::class, 'servicePartial']);
Route::get('/servicelist/{staff_id}/{id}', [AppointmentController::class, 'chooseCategory']);

//онлайн-запись
Route::get('/appointment/{serv_id}', [AppointmentController::class, 'choosestaff2']);
Route::get('/servicelist/{staff_id}', [AppointmentController::class, 'chooseService2']);
Route::get('/makeappointment/{staff_id}/{serv_id}', [AppointmentController::class, 'showAppoint'])->name('makeappointment');
Route::get('/appointment', [AppointmentController::class, 'choosestaff'])->middleware('auth');
Route::get('/appointment', [AppointmentController::class, 'choosestaff3'])->middleware('auth')->name('appointStaff');//страница "записаться из меню"
Route::get('/appointment/service', [AppointmentController::class, /*'choosestaff',*/ 'chooseService'])->middleware('auth')->name('appointService');
//Route::get('/appointment/servicelist', AppointmentController::class, 'chooseService');
Route::get('/makeappointment/{serv_id}/{staff_id}', [AppointmentController::class, 'showAppoint'])->name('makeappointment');
//Route::get('/appointment/{serv_id}', [AppointmentController::class, 'showServAppoint'])->name('makeappointment');
Route::post('/makeappointment', [AppointmentController::class, 'saveAppoint'])->name('makeappointment');

//авторизация
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//администрирование
Route::get('/admin', [LoginController::class, 'adminPage'])->name('adminhome')->middleware('is_admin');
Route::get('/adminAppointment', [AppointmentController::class, 'adminAppointment'])->middleware('is_admin');
Route::post('/adminAppointment/{id}', [AppointmentController::class, 'deleteAppointment'])->middleware('is_admin');
/*Route::get('/adminAppointment/{id}', [AdminAppointment::class, 'modifyAppointment'])->middleware('is_admin');*/

//регистрация
/*Route::get('/register', function() {
	return view('register');
})->name('register');*/
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'addUser'])->name('register');

//Восстановление пароля
Route::get('/forgot-password', [LoginController::class, 'forgotPass'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [LoginController::class, 'forgotPassword'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [LoginController::class, 'resetPassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [LoginController::class, 'passwordReset'])->middleware('guest')->name('password.update');

Route::get('/personal', function() {
	return view('personal');
});

//мастера
Route::get('/staffcarousel', [StaffController::class, 'staffGallery']);

/*Route::post('login/authenticate', [LoginController::class, 'authenticate'])->name('login-auth');*/
