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

Route::get('/','TaskController@index');
Route::post('store-task','TaskController@store_task')->name('store-task');
Route::get('tasks-monitring','TaskController@tasks_monitring')->name('tasks-monitring');




