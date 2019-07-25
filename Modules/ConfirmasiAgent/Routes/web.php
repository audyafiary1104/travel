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

Route::group(['prefix' => 'confirmasiagent'], function()
{    Route::get('/agent', 'ConfirmasiAgentController@index')->name('master_transaksi.agent');
    Route::get('/agent/{id}', 'ConfirmasiAgentController@konfirmasi_agent');
    Route::get('/payment/{id}/{balance}', 'ConfirmasiAgentController@payment_confirm')->name('master_transaksi.payment_confim');
    Route::get('/transaksi', 'ConfirmasiAgentController@transaksi')->name('master_transaksi.transaksi');
    Route::get('/transaksi/{id}', 'ConfirmasiAgentController@transaksi_post')->name('master_transaksi.transaksi_post');

    Route::get('/payment', 'ConfirmasiAgentController@payment')->name('master_transaksi.payment');
    Route::get('/hotelier', 'ConfirmasiAgentController@hotelier')->name('master_transaksi.hotelier');
    Route::get('/hotelier/{id}', 'ConfirmasiAgentController@confimasi_hoteliers');

});
