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

Route::prefix('agentdashboard')->group(function() {
    Route::get('/', 'AgentDashboardController@index')->name('agent.dashboard');
    Route::get('/booking', 'AgentDashboardController@booking')->name('agent.dashboard_booking');

});
