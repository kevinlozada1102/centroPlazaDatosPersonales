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
    return view('personas.modal');
});

Route::get('/personas', 'PersonaController@index')->name('personas.index');
Route::get('/personas/create', 'PersonaController@create')->name('personas.create');
Route::post('personas/create', 'PersonaController@store')->name('personas.store');
Route::delete('/personas/{id}', 'PersonaController@destroy')->name('personas.destroy');
