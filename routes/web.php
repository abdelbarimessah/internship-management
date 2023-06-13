<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage/landingpage');
});

Route::get('/home', function() {
    return view('landingpage/landingpage');
});

Route::get('/signIn', function() {
    return view('signinpage.signin');
});

Route::resource('stages',StageController::class);



// Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/signup', [AdminController::class, 'showSignupForm'])->name('admin.signup');
// Route::post('/admin/signup', [AdminController::class, 'signup'])->name('admin.signup.submit');


Route::get('/admin/login', 'App\Http\Controllers\AdminController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\AdminController@login')->name('admin.login.submit');
Route::get('/admin/signup', 'App\Http\Controllers\AdminController@showSignupForm')->name('admin.signup');
Route::post('/admin/signup', 'App\Http\Controllers\AdminController@signup')->name('admin.signup.submit');

Route::get('/dash', function() {
    return view('dashboard.new');
});

// User Login Routes
Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login.submit');

// User Signup Routes
Route::get('/user/signup', [UserController::class, 'showSignupForm'])->name('user.signup');
Route::post('/user/signup', [UserController::class, 'signup'])->name('user.signup.submit');



// Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/logoutadmin', [AdminController::class, 'logout'])->name('admin.logout');


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/userhome', 'HomeController@index')->name('home.index');

    // Route::group(['middleware' => ['guest']], function() {
    //     Route::get('/register', 'RegisterController@show')->name('register.show');
    //     Route::post('/register', 'RegisterController@register')->name('register.perform');
    //     Route::get('/login', 'LoginController@show')->name('login.show');
    //     Route::post('/login', 'LoginController@login')->name('login.perform');

    // });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'LogoutController@perform')->name('user.logout');
    });
});
