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

Route::post('/mobile', function() {
    return Input::all();
});

Route::get('/map/form/entity', array('as' => 'partialMarkerFeedback', 
    function() {
        $node = 'node[blank]';
        $lat = $node.'[lat]';
        $lng = $node.'[lng]';
        $revgeo = $node.'[revgeocode]';
        $type = $node.'[type]';
        $rate1 = $node.'[rate1]';
        $rate2 = $node.'[rate2]';
        $rate3 = $node.'[rate3]';
        $rate4 = $node.'[rate4]';
        $rate5 = $node.'[rate5]';
        $attr = $node.'[attr]';
        $comments = $node.'[comments]';

        $data = array(
                'lat' => $lat,
                'lng' => $lng,
                'revgeo' => $revgeo,
                'type' => $type,
                'rate1' => $rate1,
                'rate2' => $rate2,
                'rate3' => $rate3,
                'rate4' => $rate4,
                'rate5' => $rate5,
                'attr' => $attr,
                'comments' => $comments);
        return View::make('map.form-template', $data);
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
