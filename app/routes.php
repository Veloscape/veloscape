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

Route::get('/', 'MapController@index');

Route::post('/', 'MapController@save');

Route::get('/mobile', function() {
    return View::make('mobile.map');
});

Route::get('/map/form', array('as' => 'partialMarkerFeedback', 
    function() {
        $id = Input::get('id');
        $node = 'node['.$id.']';
        $lat = $node.'[lat]';
        $lng = $node.'[lng]';
        $latData = Input::get('lat');
        $lngData = Input::get('lng');
        $revgeo = $node.'[revgeocode]';
        $type = $node.'[type]';
        $rate1 = $node.'[rate1]';
        $rate2 = $node.'[rate2]';
        $rate3 = $node.'[rate3]';
        $rate4 = $node.'[rate4]';
        $rate5 = $node.'[rate5]';
        $comments = $node.'[comments]';

        $data = array(
                'id' => $id,
                'lat' => $lat,
                'latData' => $latData,
                'lng' => $lng,
                'lngData' => $lngData,
                'revgeo' => $revgeo,
                'type' => $type,
                'rate1' => $rate1,
                'rate2' => $rate2,
                'rate3' => $rate3,
                'rate4' => $rate4,
                'rate5' => $rate5,
                'comments' => $comments);
        return View::make('map.form-test', $data);
    })
);

Route::get('/comingsoon', function() {
    return View::make('landing');
});

Route::get('/comingsoon2', function() {
    return View::make('landing_white');
});

Route::get('/a', function() {
    return View::make('map.accordion');
});

Route::get('/test', function() {
    return View::make('test');
});

Route::post('/test/', 'MapController@save');
