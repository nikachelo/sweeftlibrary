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

Route::get('/', 'App\Http\Controllers\BookController@index');

Route::get('/showall', 'App\Http\Controllers\HomeController@showall');


//-------------- Book Routes

Route::get('/add', 'App\Http\Controllers\BookController@add');
Route::get('/delete/{id}', 'App\Http\Controllers\BookController@delete');
Route::get('/addbook', 'App\Http\Controllers\BookController@addbook');
Route::Post('/add', 'App\Http\Controllers\BookController@add');
Route::get('/edit/{id}', 'App\Http\Controllers\BookController@edit');
Route::get('/editprocess/{id}', 'App\Http\Controllers\BookController@editprocess');
Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');