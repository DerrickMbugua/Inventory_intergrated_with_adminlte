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
Route::get('/list','HomeController@list');
Route::view('/add','add');
Route::post('/add','HomeController@add');
Route::get('/delete/{id}','HomeController@delete');
Route::get('/edit/{id}','HomeController@edit');
Route::post('edit','HomeController@update');
Route::get('test','HomeController@test');
