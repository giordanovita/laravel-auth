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

Route::get('/', 'MyController@welcome')
    ->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/carsList', 'MyController@carsList')
    ->name('carsList');

Route::get('/pilotDetails{id}', 'MyController@pilotDetails')
    ->name('pilotDetails');

Route::get('/create', 'HomeController@create')
    ->name('create');

Route::post('/store', 'HomeController@store')
    ->name('store');

Route::get('/edit{id}', 'HomeController@edit')
    ->name('edit');

Route::post('/update{id}', 'HomeController@update')
    ->name('update');
   

Route::get('/delete{id}', 'HomeController@delete')
    ->name('delete');

Route::get('/pilotsList', 'MyController@pilotsList')
    ->name('pilotsList');





