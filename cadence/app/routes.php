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

Route::get('/new/', 'MapController@index');

Route::post('/new/', 'MapController@save');

Route::get('/form/entity', array('as' => 'partialMarkerFeedback', 'uses' => 'MapController@addEntity'));

Route::get('/login', function() { return Redirect::route('home'); });
Route::post('/login', array('as' => 'admin login', 'uses' => 'AdminController@login'));

Route::group(array('before' => 'admin.auth'), function() {
    Route::get('/dashboard', array('as' => 'admin dashboard', 'uses' => 'AdminController@dashboard'));

    Route::get('/logout', function() {
        Auth::logout();
        return Redirect::route('ahome');
    });


    Route::get('/page/new', function() {
        return View::make('admin.new-page');
    });
});

Route::filter('admin.auth', function() {
    if (Auth::guest()) return Redirect::route('admin home');
});

