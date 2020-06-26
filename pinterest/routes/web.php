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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');

Route::get('/details/create', 'DetailController@create')->name('details.create');

Route::post('/details', 'DetailController@store')->name('details.store');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'dashboardController@index');
});