<?php

class Marker extends Eloquent {
    
    //MASS ASSIGNMENT security
    protected $fillable = array('map_route_id', 'marker_no', 'lat', 'lng', 'rev_geo');

    public function route() {
        return $this->belongsTo('Route');
    }

    public function values() {
        return $this->hasMany('MarkerValue');
    }
}
