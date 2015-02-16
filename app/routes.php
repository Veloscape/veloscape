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

Route::get('/blah', array('as' => 'partialMarkerFeedback', 
    function() {
        $poi = 'poi['.Input::get('id').']';
        $lat = $poi.'[lat]';
        $lng = $poi.'[lng]';
        $type = $poi.'[type]';
        $rate1 = $poi.'[rate1]';
        $rate2 = $poi.'[rate2]';
        $rate3 = $poi.'[rate3]';
        $rate4 = $poi.'[rate4]';
        $rate5 = $poi.'[rate5]';
        $comments = $poi.'[comments]';

        $data = array(
                'lat' => $lat,
                'lng' => $lng,
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

Route::get('/a', function() {
    return View::make('map.accordion');
});

Route::get('/test', function() {
    return View::make('test');
});
