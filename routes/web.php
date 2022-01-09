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

Route::get('/admin/personas/listado', 'PersonaController@index')->name('personas.index');
Route::get('/registroExitoso' , 'PersonaController@registrado')->name('personas.registrado');
Route::get('/', 'PersonaController@create')->name('personas.create');
Route::post('personas/create', 'PersonaController@store')->name('personas.store');
Route::delete('/personas/{id}', 'PersonaController@destroy')->name('personas.destroy');
Route::post('/personas/{id}', 'PersonaController@update')->name('personas.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/publicidad' , 'PublicidadController@index')->name('publicidad.index');
Route::get('/publicidad/create' , 'PublicidadController@create')->name('publicidad.create');
Route::post('/publicidad/create', 'PublicidadController@store')->name('publicidad.store');
Route::delete('publicidad/{id}' , 'PublicidadController@destroy')->name('publicidad.destroy');

