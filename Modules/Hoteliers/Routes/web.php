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

Route::group(['prefix' => 'hoteliers', 'middleware' => 'hoteliers' ], function(){
    Route::get('/', 'HoteliersController@dashboard')->name('sales.dashboard');
    Route::get('/transaksi', 'HoteliersController@index')->name('sales.transaksi');
    Route::get('/my_hotels', 'HoteliersController@myHotels')->name('sales.myhotels');
    Route::get('/room_type', 'HoteliersController@room_type')->name('sales.room');
    Route::get('/discount', 'HoteliersController@discount')->name('sales.discount');
    Route::get('/add_hotel', 'HoteliersController@add_hotel')->name('sales.add_hotel');
    Route::get('/add_room', 'HoteliersController@add_rooms')->name('sales.add_rooms');
    Route::post('/add_hotel/post', 'HoteliersController@add_hotels_post')->name('sales.add_hotel.post');
    Route::post('/add_rooms/post', 'HoteliersController@add_rooms_post')->name('sales.add_rooms.post');
});

Route::get('/hoteliers/login', 'HoteliersController@login')->name('hoteliers.login');
Route::get('/register', 'HoteliersController@register')->name('hoteliers.register');
Route::get('/hoteliers/logout', 'HoteliersController@logout')->name('hoteliers.logout');

Route::post('/register/post', 'HoteliersController@store')->name('register.post');
Route::post('/login/post', 'HoteliersController@post_login')->name('hoteliers.login.post');