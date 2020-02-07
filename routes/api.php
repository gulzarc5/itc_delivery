<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace'=>'Api'], function(){
    Route::post('user/login','LoginController@userLogin');

    Route::group(['middleware'=>'auth:api'],function(){
        Route::get('journey/form/load','JourneyController@journeyFormLoad');

        Route::post('journey/start','JourneyController@journeyStart');

        Route::get('outlet/list/{beat_id}/{user_id}','JourneyController@outLetList');

        Route::post('journey/end','JourneyController@journeyEnd');

        Route::post('outlet/delivered','JourneyController@outletDelivery');

    });
     

});

