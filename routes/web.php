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


Route::get('/', 'StudentController@index') ->name('stundents.all');
Route::get('/showDetails/{id}', 'StudentController@showDetails') ->name('students.showDetails');
Route::get('/editStudents/{id}', 'StudentController@edit') ->name('students.edit');
Route::get('/deleteStudent', 'StudentController@delete') ->name('students.delete');
