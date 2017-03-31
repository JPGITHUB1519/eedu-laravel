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

Route::get('/', 'MainController@index');
Route::get('/programs', 'ProgramsController@index');
Route::get('/programs/{program}', 'ProgramsController@show');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/programs', 'ProgramsController@admin_index');
Route::post('/admin/programs', 'ProgramsController@store');
Route::get('/admin/programs/create', 'ProgramsController@create');