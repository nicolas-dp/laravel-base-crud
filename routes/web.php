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

Route::get('/comics', 'CardController@index')->name('cards.index');
Route::get('/comics/create', 'CardController@create')->name('cards.create');
Route::post('/comics', 'CardController@store')->name('cards.store');
Route::get('/comics/{card}', 'CardController@show')->name('cards.show');
Route::get('/comics/{card}/edit', 'CardController@edit')->name('cards.edit');
Route::put('/comics/{card}', 'CardController@update')->name('cards.update');
/* Route::get('/comics/{card}/destroy', 'CardController@destroy')->name('cards.destroy'); */


Route::delete('/comics/{card}/destroy', 'CardController@destroy')->name('cards.destroy');