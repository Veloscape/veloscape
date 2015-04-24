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
    <div class="body-container">
        @include('map.search')
        <div class="map-container">
            @include('map.map-container')
        </div>
        {{ Form::open() }}
        <div class="side-menu">
           @include('map.side-menu') 
        </div>
        {{ Form::close() }}
    </div>

    
@stop
