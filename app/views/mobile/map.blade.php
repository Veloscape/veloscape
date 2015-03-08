@extends('layouts.mobile-master')

@section('head')
    @parent
    @include('js.mobile.map-blade')
    @include('js.mobile.map')
    @include('js.mobile.map-style')
    @include('js.mobile.map-events')
@stop

@section('body')
    <div>
    {{ Form::open() }}
    <div class="map-hint">
        <div class="content"><span>Touch the map to place route markers</span></div>
        <div class="background"></div>
    </div>
    <div class="map-container">
    <div id="map" style="position:absolute; top:0; left:0; height:100%; width:100%"></div>
    </div>

    <div class="mobile submit-btn btn btn-primary">
        <span>SUBMIT</span>
    </div>
    {{ Form::close() }}
    </div>
@stop
