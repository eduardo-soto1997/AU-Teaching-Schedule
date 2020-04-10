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


Route::get('/instructor', 'InstructorController@index');
Route::post('/instructor', 'InstructorController@store');
Route::get('/instructor/create', 'InstructorController@create');
Route::get('/instructor/edit/{post}', 'InstructorController@edit');
Route::put('/instructor/{instructor}', 'InstructorController@update');
