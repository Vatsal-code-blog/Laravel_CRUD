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
Route::get('/show','Studentcontroller@index');
Route::get('/Create', 'Studentcontroller@create');
Route::post('/insert_records','Studentcontroller@store');
Route::get('/edit','Studentcontroller@edit');
Route::get('/info/{id}', 'Studentcontroller@show')->name('info');
Route::get('/edit/{editid}', 'Studentcontroller@edit')->name('edit');
Route::post('/delete/{deleteid}', 'Studentcontroller@destroy')->name('delete');
Route::post('/update/{updid}', 'Studentcontroller@update')->name('update');
Route::view('/status','welcome')->name('status');
