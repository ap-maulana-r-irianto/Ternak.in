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

Route::get('/', 'PagesController@login')->middleware('guest');
Route::get('/logout', 'PagesController@logout');
Route::get('/create', 'PagesController@create')->middleware('guest');
Route::post('/store', 'PagesController@store');

//peternak
Route::get('/peternak/dashboard', 'PagesControllerPeternak@home');
Route::get('/peternak/grafik', 'PagesControllerpeternak@grafik');
Route::get('/peternak/profil', 'PagesControllerpeternak@profil');
//kambingku
Route::get('/peternak/carikambingku', 'Kambingku_PeternakController@search');
Route::resource('/peternak/kambingku', 'Kambingku_PeternakController');
//investorku
Route::get('/peternak/cariinvestorku', 'Investorku_PeternakController@search');
Route::resource('/peternak/investorku', 'Investorku_PeternakController');
//perminvestasi
Route::get('/peternak/cariperminvestasi', 'Perminvestasi_PeternakController@search');
Route::resource('/peternak/perminvestasi', 'Perminvestasi_PeternakController');
//requestjual
Route::get('/peternak/carirequestjual', 'Requestjual_PeternakController@search');
Route::resource('/peternak/requestjual', 'Requestjual_PeternakController');


//admin
Route::get('/admin/grafik', 'PagesControlleradmin@grafik');
Route::get('/admin/dashboard', 'PagesControllerAdmin@home');
Route::get('/admin/profil', 'PagesControllerAdmin@profil');
//peternak
Route::get('/admin/caripeternak', 'Peternak_AdminController@search');
Route::resource('/admin/peternak', 'Peternak_AdminController');
//investor
Route::get('/admin/cariinvestor', 'Investor_AdminController@search');
Route::resource('/admin/investor', 'Investor_AdminController');
//pembeli
Route::get('/admin/caripembeli', 'Pembeli_AdminController@search');
Route::resource('/admin/pembeli', 'Pembeli_AdminController');
//transaksi
Route::get('/admin/caritransaksi', 'Transaksi_AdminController@search');
Route::resource('/admin/transaksi', 'Transaksi_AdminController');

//investor
Route::get('/investor/dashboard', 'PagesControllerInvestor@home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
