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

Route::group(['prefix' => 'setting'], function()
 {
    Route::get('/', 'SettingController@index')->name('setting.bank');
    Route::post('add_bank', 'SettingController@add_bank')->name('setting.bank.post');

});
