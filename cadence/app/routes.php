<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/**
Route::get('/test/nav', function() {
    return View::make('test/nav');
});
**/


Route::get('/', 'MapController@index');

Route::post('/', 'MapController@save');

Route::get('/form/entity', array('as' => 'partialMarkerFeedback', 'uses' => 'MapController@addEntity'));



