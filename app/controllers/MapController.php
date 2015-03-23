<?php

class MapController extends BaseController {

    public function index()
    {

        return View::make('map');
    }

    public function save()
    {
        return Input::all();
    }

    public function addEntity() {
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
    }
}
