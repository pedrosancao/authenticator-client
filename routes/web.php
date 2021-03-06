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

Route::get('/', 'AboutController@index')->name('about');

Auth::routes(array_fill_keys(['reset', 'confirm'], false));

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/codes', 'HomeController@codes')->name('codes');
Route::get('/add', 'HomeController@add')->name('add');
Route::put('/add', 'HomeController@new')->name('new');
Route::get('/manage', 'HomeController@manage')->name('manage');
Route::delete('/remove/{account}', 'HomeController@remove')->name('remove');
