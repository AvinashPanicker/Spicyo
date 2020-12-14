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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/index', 'App\Http\Controllers\HomeController@index');
Route::get('/blog', 'App\Http\Controllers\BlogController@index');
Route::get('/blog/create', 'App\Http\Controllers\BlogController@create');
Route::post("/blog/create",'App\Http\Controllers\BlogController@store');
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@show');
Route::get('/blog/{id}/edit', 'App\Http\Controllers\BlogController@edit');
Route::put('/blog/{id}/edit', 'App\Http\Controllers\BlogController@update');
Route::delete('/blog/{id}/delete', 'App\Http\Controllers\BlogController@destroy');
Route::get('/recipe', 'App\Http\Controllers\HomeController@recipe');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::get('/about', 'App\Http\Controllers\HomeController@about');