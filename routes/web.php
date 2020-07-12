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

Route::get('/', 'StudentController@prova')->name('home');

//nel controller abbiamo le funzioni per gestire automaticamente le rotte (index, create ...)
//praticamente il controller gestira' tutte le operazioni CRUD
Route::resource('/students', 'StudentController');