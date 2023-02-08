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
Route::get('/deleteStudent', 'StudentController@delete') ->name('students.delete');
Route::get('/editForm', 'StudentController@editForm') ->name('students.editForm');
Route::get('/createForm', 'StudentController@formCreate') ->name('students.create');

Route::post('/create', 'StudentController@create')->name('create');
Route::post('/edit', 'StudentController@edit') ->name('students.edit');





Route::get('/subjects', 'SubjectController@index')->name('subjects.all');

Route::get('/ShowDetails/{id}', 'SubjectController@showDetails') ->name('subjects.showDetails');
Route::get('/DeleteSubject', 'SubjectController@delete') ->name('subjects.delete');
Route::get('/EditForm', 'SubjectController@editForm') ->name('subjects.editForm');
Route::get('/CreateForm', 'SubjectController@formCreate') ->name('subjects.create');

Route::post('/Create', 'SubjectController@create')->name('Create');
Route::post('/Edit', 'SubjectController@edit') ->name('subjects.edit');