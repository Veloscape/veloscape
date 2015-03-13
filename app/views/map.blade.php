@extends('layouts.master')

@section('head')
    @parent
    @include('js.map-blade')
    @include('js.map')
    @include('js.map-style')
    @include('js.map-events')
    @stop

@section('body')
    <div class="body-container">
        {{ Form::open() }}
        <div class="map-container">
            @include('map.map-container')
        </div>
        @include('map.confirm')
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
