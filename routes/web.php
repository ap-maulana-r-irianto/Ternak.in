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

Route::get('/', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/peternak', 'PagesControllerPeternak@home');
Route::get('/admin', 'PagesControllerAdmin@home');
Route::get('/investor', 'PagesControllerInvestor@home');
