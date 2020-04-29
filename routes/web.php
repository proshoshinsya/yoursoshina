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
/*
Route::get('/', function () {
    return view('tellme');
});*/

Route::get('/', 'tellmeController@index')->name('tellme');
Route::get('/Consultation', 'tellmeController@Consultation')->name('tellme');
Route::post('/soshina', 'tellmeController@SoshinaAnswer')->name('tellme');



