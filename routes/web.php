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

Route::get('/', 'PagesController@login');
Route::get('/beranda', 'PagesController@beranda');
Route::get('/general', 'GeneralController@index');
Route::get('/general/edit/{id}','GeneralController@edit');
Route::post('/general/update/{id}','GeneralController@update');
Route::get('/akademik', 'AkademikController@index');
Route::get('/akademik2', 'NilaiController@index');
Route::get('/spp', 'SppController@index');
Route::get('/submission/add','SubmissionController@add');
Route::post('/submission/create','SubmissionController@create');
Route::get('/akademik2/cetak_pdf', 'NilaiController@cetak_pdf');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
