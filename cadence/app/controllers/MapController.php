<?php

class MapController extends BaseController {

    public function index()
    {
        $urls = array (
            'url_home'  => "/",
            'url_map'   => "/map/new",
            'url_about' => "/about-veloscape",
            'url_null'  => "#"
        );
        return View::make('map', $urls);
    }

    public function save()
    {
        $input = Input::all();
        $route_id = $this->newRoute($input['map']);
        $this->addMarkers($route_id, $input['node']);

        dd($input);
    }

    public function newRoute($data) {
        $route = new MapRoute;
        $route->title = $data['name'];
        $route->desc =$data['desc']; 
        $route->save();

        return $route->id;
    }

    public function addMarkers($id, $data) {
        foreach (array_reverse($data) as $m) {
            $marker = new Marker;
            $marker->map_route_id = $id;
            $marker->lat = $m['lat'];
            $marker->lng = $m['lng'];
            $marker->rev_geo = $m['revgeocode'];
            $marker->save();

            $info_array = $m['info'];
            foreach (array_keys($info_array) as $key) {
                $marker_info = new MarkerValue;
                $marker_info->marker_id = $marker->id;
                $marker_info->key = $key;
                $marker_info->value = $info_array[$key];
                $marker_info->save();
            }
        }
    }

    public function addEntity() {
        $node = 'node[blank]';
        $lat = $node.'[lat]';
        $lng = $node.'[lng]';
        $revgeo = $node.'[revgeocode]';
        $type = $node.'[info][type]';
        $rate1 = $node.'[info][safety]';
        $rate2 = $node.'[info][momentum]';
        $rate3 = $node.'[info][enjoyment]';
        $comments = $node.'[info][comments]';

        $data = array(
                'lat' => $lat,
                'lng' => $lng,
                'revgeo' => $revgeo,
                'type' => $type,
                'rate1' => $rate1,
                'rate2' => $rate2,
                'rate3' => $rate3,
                'comments' => $comments);
        return View::make('map.form-template', $data);
    }
}
