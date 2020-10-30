<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
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
Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);


Route::get('user-register', [UserController::class, 'userRegisterIndex']);

Route::post('user-store', [UserController::class, 'userPostRegistration']);

Route::get('user-login', [UserController::class, 'userLoginIndex']);

Route::post('login', [UserController::class, 'userPostLogin']);

Route::post('reset', [UserController::class, 'userPostReset']);

Route::get('dashboard', [UserController::class, 'dashboard']);

Route::get('user-logout', [UserController::class, 'logout']);

// Route::get('user-login', 'UserController@userLoginIndex');

// Route::post('login', 'UserController@userPostLogin');
// Route::post('reset', 'UserController@userPostReset');

// Route::get('dashboard', 'UserController@dashboard');

// Route::get('logout', 'UserController@logout');

