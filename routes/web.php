<?php

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

Route::get('/', 'PagesController@home'); //memanggil method home yg ada di dalam file PagesController
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

//Students routes
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create'); //menampilkan form create new data
// Route::get('/students/{student}', 'StudentsController@show'); //show data details
// Route::post('/students', 'StudentsController@store'); //store or save data
// Route::delete('/students/{student}', 'StudentsController@destroy'); //delete 1 data
// Route::get('/students/{student}/edit', 'StudentsController@edit'); //menampilkan form edit
// Route::patch('/students/{student}', 'StudentsController@update'); //update data hasil dari form edit

//Students routes but better
Route::resource('students', 'StudentsController');
