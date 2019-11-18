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

Route::get('/', 'HomeController@index');
Route::get('/login', 'PagesController@awal');
Route::post('/masuk', 'PagesController@login');
Route::get('/logout', 'PagesController@logout');
Route::get('/create/peternak', 'PagesController@createpeternak');
Route::get('/create/investor', 'PagesController@createinvestor');
Route::get('/create/pembeli', 'PagesController@createpembeli');
Route::post('/store/peternak', 'PagesController@storepeternak');
Route::post('/store/investor', 'PagesController@storeinvestor');
Route::post('/store/pembeli', 'PagesController@storepembeli');

// Route::group(['middleware' => ['auth:peternak']], function(){

//peternak
Route::get('/peternak/dashboard', 'PagesControllerPeternak@home');
Route::resource('/peternak/profil', 'Profil_Peternak');
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
//perkembangan
Route::get('/peternak/tambah/{id}', 'Perkembangan_PeternakController@buat');
Route::resource('/peternak/perkembangan', 'Perkembangan_PeternakController');

// });

// Route::group(['middleware' => ['auth:admin']], function(){
//admin
Route::get('/admin/dashboard', 'PagesControllerAdmin@home');
Route::resource('/admin/profil', 'Profil_Admin');
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

// });

// Route::group(['middleware' => ['auth:investor']], function(){
// investor
Route::get('/investor/dashboard', 'PagesControllerInvestor@home');
Route::resource('/investor/profil', 'Profil_Investor');
//peternak
Route::get('/investor/caripeternak', 'Peternak_InvestorController@search');
Route::resource('/investor/peternak', 'Peternak_InvestorController');
//peternakku
Route::get('/investor/caripeternakku', 'Peternakku_InvestorController@search');
Route::resource('/investor/peternakku', 'Peternakku_InvestorController');
//requestjual
Route::get('/investor/carirequestjual', 'Requestjual_InvestorController@search');
Route::resource('/investor/requestjual', 'Requestjual_InvestorController');
//perminvestasi
Route::get('/investor/cariperminvestasi', 'Perminvestasi_InvestorController@search');
Route::resource('/investor/perminvestasi', 'Perminvestasi_InvestorController');

Route::resource('/investor/kambing', 'Kambing_InvestorController');
Route::resource('/investor/kambingku', 'Kambingku_InvestorController');
Route::resource('/investor/perkembangan', 'Perkembangan_InvestorController');
Route::resource('/investor/keranjang', 'Keranjang_InvestorController');

// });

Route::get('/home', 'HomeController@index');
Route::get('/welcome', 'HomeController@welcome');


// Auth::routes();

