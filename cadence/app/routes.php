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


Route::get('/', array('as' => 'home', function() {
    if (preg_match('/map/', Request::url())) {
        return Redirect::to('/new');
    }
    else {
        $app = app();
        $controller = $app->make('AdminController');
        return $controller->callAction('index', $parameters = array());
    } 
}));

Route::group(array('before' => 'admin.domain'), function() {
    Route::get('/new/', 'MapController@index');

    Route::post('/new/', 'MapController@save');

    Route::get('/form/entity', array('as' => 'partialMarkerFeedback', 'uses' => 'MapController@addEntity'));

});

Route::group(array('before' => 'map.domain'), function() {
    Route::get('/cadence/login', function() { return Redirect::route('admin dashboard'); });
    Route::post('/cadence/login', array('as' => 'admin login', 'uses' => 'AdminController@login'));

    Route::group(array('before' => 'admin.auth'), function() {
        Route::get('/cadence', function() { return Redirect::route('admin dashboard'); });
        Route::get('/cadence/dashboard', array('as' => 'admin dashboard', 'uses' => 'AdminController@dashboard'));
        Route::get('/cadence/routes/show', array('as' => 'admin routes', 'uses' => 'AdminController@routes'));

        Route::get('/cadence/logout', array('as' => 'admin logout', function() {
            Auth::logout();
            return Redirect::route('home')->withErrors(array('message' => 'Successfully logged off'));
        }));

    });

});

/** Route Filters **/

Route::filter('admin.auth', function() {
    if (Auth::guest()) return Redirect::route('home');
});


Route::filter('map.domain', function() {
    if (preg_match('/map/', Request::url())) {
        return Redirect::route('home');
    }
});

Route::filter('admin.domain', function() {
    if (preg_match('/admin/', Request::url())) {
        return Redirect::route('home');
    }
});
