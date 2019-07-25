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

Route::group(['prefix' => 'master_custommer'], function()
{
    Route::get('/agent', 'MasterCustommerController@index')->name('master_agent.index');
    Route::get('/transaksi', 'MasterCustommerController@transaksi')->name('master_transaksi.index');
    Route::get('/hotelier', 'MasterCustommerController@hotelier')->name('master_hotelier.index');
    Route::get('/transaksi_balance', 'MasterCustommerController@transaksi_balance')->name('master_agent.transaksi_balance');

});
