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

Route::get('/', function(){ return redirect('/communities'); });

Route::get('/communities', 'PostsController@index');
Route::post('/communities', 'PostsController@create');
Route::put('/communities/{id}', 'PostsController@update');
Route::delete('/communities/{id}', 'PostsController@delete');
