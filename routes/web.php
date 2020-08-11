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

Route::get('/', 'HomeController@index');
Route::get('/listen', 'HomeController@listen');
Route::get('/watch/{id}/{slug}', 'HomeController@watch');
Route::get('/show/{id}/{slug}', 'HomeController@show');
Route::get('/store', 'HomeController@store');
Route::get('/search', 'HomeController@search');
Route::get('/reload/{secret}','HomeController@updateDB');

Route::post('/login','RevenueController@login');
Route::post('/register','RevenueController@register');
Route::post('/reset','RevenueController@resetPassword');
Route::get('/logout','RevenueController@logout');
Route::post('/subscribe','RevenueController@subscribe');


