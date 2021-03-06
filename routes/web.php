<?php

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
    return view('welcome');
})->middleware('validate_role')->name('welcome');

Route::get('/app/dashboard', function () {
    return view('app.dashboard');
})->middleware('validate_role');


Route::get('/clase', function () {
    return view('mi-clase');
});

Route::get('/controller', 'MyController@index');

//creates all
Route::resource('coins', 'CoinsController')->middleware('validate_role');
Route::resource('app/users', 'UserController')->middleware('validate_role');


Route::get('register', 'AuthController@register')->name('auth.register');
Route::post('register', 'AuthController@doRegister')->name('auth.do-register');
Route::get('login', 'AuthController@login')->name('auth.login');
Route::post('login', 'AuthController@doLogin')->name('auth.do-login');
Route::any('logout', 'AuthController@logout')->name('auth.logout');
