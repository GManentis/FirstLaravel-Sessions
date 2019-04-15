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

Route::get('/', 'ConnectUser@connect');
Route::get('/signup','CreateUser@FirstVisit');
Route::post('/signup','CreateUser@createUser');
Route::get('/logout','RejectUser@logout');
Route::get('/delete','RejectUser@delete');
Route::post('/login','ConnectUser@login');
Route::get('/login','ConnectUser@firstEnter');
