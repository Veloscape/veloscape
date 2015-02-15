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

}
