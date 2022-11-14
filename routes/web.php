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

Route::get('/blogs', 'App\Http\Controllers\BlogController@index')->middleware('auth');
Route::get('/blogs/create', 'App\Http\Controllers\BlogController@create');
Route::post('/blogs', 'App\Http\Controllers\BlogController@store');
Route::get('/blogs/{id}', 'App\Http\Controllers\BlogController@show')->middleware('auth');
Route::delete('/blogs/{id}', 'App\Http\Controllers\BlogController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
