@extends('layouts.master')

@section('head')
    @parent
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    {{ HTML::script('js/map.js') }}
    {{ HTML::script('js/map-events.js') }}
@stop

@section('body')


    <div class="row" style="padding:4%;">

        <div class="col-md-6" style="background-color: #999999; padding-bottom: 45%">
            @include('map.map')
        </div>
        
        <div class="col-md-6" style="background-color: #eeeeee">
            <div class="container">
    
            </div>
        </div>
    </div>

@stop
