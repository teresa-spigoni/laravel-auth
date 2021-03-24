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
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// My Routes
Route::get('flights', 'PublicController@index')->name('public.flights.index'); // index pubblica
Route::get('flights/{flight}', 'PublicController@show')->name('public.flights.show'); // show pubblica

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function(){
        Route::resource('/flights', PrivateController::class); // create, store, edit, update e destroy private
    });
