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

//root
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Kai';
//     return view('about',['nama' => $nama]); // associative array, yang nanti akan dipanggin di view about
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@show');
