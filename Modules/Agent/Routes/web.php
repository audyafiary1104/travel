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

Route::group(['prefix' => 'agent', 'middleware' => 'agent' ], function(){
    Route::post('register', 'AgentController@store')->name('register.agent');
    Route::get('/', 'AgentController@index')->name('agent.index');
    Route::get('/list_product', 'AgentController@list_product')->name('agent.list');
    Route::get('autocomplete', 'AgentController@search')->name('search.agent');
    Route::post('list_hotels', 'AgentController@search_hotels')->name('list_hotels.agent');
    Route::get('details_hotels/{id}', 'AgentController@details_hotels')->name('details.agent');
    Route::get('select_room/{id}', 'AgentController@select_rooms')->name('select_rooms.agent');
    Route::get('cart/{id}', 'AgentController@cart')->name('cart.agent');
    Route::post('checkout/post', 'AgentController@check_out')->name('checkout.agent_post');
    Route::get('transfer_balance/', 'AgentController@transfer_balance')->name('agent.transfer');
    Route::post('transfer_balance/post', 'AgentController@transfer_balance_post')->name('agent.transfer_post');
    Route::get('thanks_you', 'AgentController@thanks_you')->name('agent.thanks_you');
    Route::get('logout', 'AgentController@logout')->name('agent.logout');


});
Route::get('/agent/login', 'AgentController@login')->name('agent.login');
Route::post('/agent/login/post', 'AgentController@login_post')->name('agent.login_post');
Route::post('register', 'AgentController@store')->name('register.agent');
Route::get('/agent/register', 'AgentController@register')->name('register.agent_get');

