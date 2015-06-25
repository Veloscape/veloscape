@extends('layouts.master')

@section('head')
    @parent
    @include('js.map-blade')
    @include('js.map')
    @include('js.map-style')
    @include('js.map-events')
@stop

@section('header')
    @include('layouts.navbar')
@stop

@section('body')
    <div class="body-container info">

        <div class="map-container"> 
        @include('map.map-container')

        </div>

        <div class="map-overlay dismiss-submit">
        </div>
        
        @include('map.search')

        {{ Form::open(array('id' => 'createroute')) }}
        @include('map.side-menu') 
        {{ Form::close() }}
    </div>

    
@stop
