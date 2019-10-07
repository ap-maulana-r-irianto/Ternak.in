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

//peternak
Route::get('/peternak/dashboard', 'PagesControllerPeternak@home');
//kambingku
Route::get('/peternak/carikambingku', 'Kambingku_PeternakController@search');
Route::get('/peternak/tambahkambingku', 'Kambingku_PeternakController@create');
Route::get('/peternak/detailkambingku', 'Kambingku_PeternakController@show');
Route::get('/peternak/seluruhkambingku', 'Kambingku_PeternakController@index');
Route::get('/peternak/storekambingku', 'Kambingku_PeternakController@store');
Route::get('/peternak/editkambingku', 'Kambingku_PeternakController@edit');
Route::get('/peternak/updatekambingku', 'Kambingku_PeternakController@update');
Route::get('/peternak/destroykambingku', 'Kambingku_PeternakController@destroy');
//investorku
Route::get('/peternak/cariinvestorku', 'Investorku_PeternakController@search');
Route::get('/peternak/detailinvestorku', 'Investorku_PeternakController@show');
Route::get('/peternak/seluruhinvestorku', 'Investorku_PeternakController@index');
//perminvestasi
Route::get('/peternak/cariperminvestasi', 'Perminvestasi_PeternakController@search');
Route::get('/peternak/detailperminvestasi', 'Perminvestasi_PeternakController@show');
Route::get('/peternak/seluruhperminvestasi', 'Perminvestasi_PeternakController@index');
//requestjual
Route::get('/peternak/carirequestjual', 'Requestjual_PeternakController@search');
Route::get('/peternak/detailrequestjual', 'Requestjual_PeternakController@show');
Route::get('/peternak/seluruhrequestjual', 'Requestjual_PeternakController@index');

//admin
Route::get('/admin/dashboard', 'PagesControllerAdmin@home');
//peternak
Route::get('/admin/caripeternak', 'Peternak_AdminController@search');
Route::get('/admin/tambahpeternak', 'Peternak_AdminController@create');
Route::get('/admin/seluruhpeternak', 'Peternak_AdminController@index');
Route::get('/admin/detailpeternak/{id}', 'Peternak_AdminController@show');
Route::post('/admin/storepeternak', 'Peternak_AdminController@store');
Route::get('/admin/editpeternak/{id}', 'Peternak_AdminController@edit');
Route::put('/admin/updatepeternak/{id}', 'Peternak_AdminController@update');
Route::delete('/admin/destroypeternak/{id}', 'Peternak_AdminController@destroy');
//investor
Route::get('/admin/cariinvestor', 'Investor_AdminController@search');
Route::get('/admin/tambahinvestor', 'Investor_AdminController@create');
Route::get('/admin/seluruhinvestor', 'Investor_AdminController@index');
Route::get('/admin/detailinvestor', 'Investor_AdminController@show');
Route::post('/admin/storeinvestor', 'Investor_AdminController@store');
Route::get('/admin/editinvestor', 'Investor_AdminController@edit');
Route::put('/admin/updateinvestor', 'Investor_AdminController@update');
Route::get('/admin/destroyinvestor', 'Investor_AdminController@destroy');
//pembeli
Route::get('/admin/caripembeli', 'Pembeli_AdminController@search');
Route::get('/admin/tambahpembeli', 'Pembeli_AdminController@create');
Route::get('/admin/seluruhpembeli', 'Pembeli_AdminController@index');
Route::get('/admin/detailpembeli', 'Pembeli_AdminController@show');
Route::post('/admin/storepembeli', 'Pembeli_AdminController@store');
Route::get('/admin/editpembeli', 'Pembeli_AdminController@edit');
Route::put('/admin/updatepembeli', 'Pembeli_AdminController@update');
Route::get('/admin/destroypembeli', 'Pembeli_AdminController@destroy');
//transaksi
Route::get('/admin/caritransaksi', 'Transaksi_AdminController@search');
Route::get('/admin/seluruhtransaksi', 'Transaksi_AdminController@index');
Route::get('/admin/detailtransaksi', 'Transaksi_PeternakController@show');

Route::get('/investor/dashboard', 'PagesControllerInvestor@home');

