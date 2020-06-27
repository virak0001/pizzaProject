<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auths.login');
});

Route::get('/home','HomeController@index');

Route::get('/signup', function () {
    return view('auths.register');
});
Route::put('signin','Auth\RegisterController@signin')->name('signin');

Route::get('logout','Auth\LogoutController@logout')->name('logout');

Route::put('login','Auth\LoginController@login')->name('login');

Route::put('storePizaa','PizzaController@store')->name('storePizza');

Route::delete('destroyPizza/{id}','PizzaController@destroy')->name('destroyPizza');

Route::put('updatePizza/{id}','PizzaController@update')->name('updatePizza');
