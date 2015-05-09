<?php

class MapRoute extends Eloquent {

    protected $table = 'routes';

    //MASS ASSIGNMENT
    //define which attribs are mass assignable.
    protected $fillable = array('title','desc');

    public function markers() {
        return $this->hasMany('Marker');
    }

}
