<?php

class MarkerValue extends Eloquent {

    protected $fillable = array('marker_id','key','value');

    public function marker() {
        return $this->belongsTo('Marker');
    }
}
