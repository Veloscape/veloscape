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

Route::get('/', array('as' => 'home', function() 
{
    return Redirect::to('comingsoon');
}));

Route::get('/comingsoon', array('as' => 'comingsoon', function() {
    return View::make('landing');
}));

Route::group(array('prefix' => 'development'), function() {

    Route::get('map', 'MapController@index');

    Route::post('map', 'MapController@save');

    Route::get('/map/form/entity', array('as' => 'partialMarkerFeedback', 'uses' => 'MapController@addEntity'));

    
    Route::group(array('prefix' => 'admin'), function() {
        Route::get('/', array('as' => 'admin home', 'uses' =>'AdminController@index'));
        Route::get('/login', function() { return Redirect::route('admin home'); });
        Route::post('/login', array('as' => 'admin login', 'uses' => 'AdminController@login'));

        Route::group(array('before' => 'admin.auth'), function() {
            Route::get('/dashboard', array('as' => 'admin dashboard', 'uses' => 'AdminController@dashboard'));

            Route::get('/logout', function() {
                Auth::logout();
                return Redirect::route('admin home');
            });


            Route::get('/page/new', function() {
                return View::make('admin.new-page');
            });
        });
    });

    Route::filter('admin.auth', function() {
        if (Auth::guest()) return Redirect::route('admin home');
    });
});


