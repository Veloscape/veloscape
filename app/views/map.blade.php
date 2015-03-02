@extends('layouts.master')

@section('head')
    @parent
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAA4Yq0AZ9MYvZz5gz_9WUZPzYOguRYWaM"></script>
    @include('js.map')
    @include('js.map-blade')
    @include('js.map-style')
    @include('js.map-events')
    @stop

@section('body')
    <div class="body-container">
        {{ Form::open() }}
        <div class="map-container">
            @include('map.map-container')
        </div>

        <div class="side-menu">
           @include('map.side-menu') 
        </div>

        <div class="map-controls">
            <button class="control toggler" type="button">
                <i class="fa fa-angle-right fa-2x"></i>
            </button> 
        </div>
        {{ Form::close() }}
    </div>

    
@stop
