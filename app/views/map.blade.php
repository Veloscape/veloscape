@extends('layouts.master')

@section('head')
    @parent
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    @include('js.map')
    @include('js.map-style')
    @include('js.map-events')
    <script>
        $(document).ready(function() {
            $('#feedback-container').height($('#map').height());
        });
        
        $(window).resize(function() {
            $('#feedback-container').height($('#map').height());
            $('#accordion').accordion("refresh");
        });

        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "fill",
                collapsible: "true"
            });
        });
    
    </script>
    @stop

@section('body')
    
    @include('layouts.navbar')
    <div class="container">
        {{ Form::open() }}
        <div class="row">
            
        </div>

        <div class="row">

            <div class="col-md-6" id="map-container" style="background-color: #999999; padding-bottom: 45%;">
                @include('map.map-container')
            </div>
            
            <div class="col-md-6" id="feedback-container" style="background-color: #eeeeee;">
                @include('map.accordion')
            </div>
        </div>
        {{ Form::submit() }}
        {{ Form::close() }}
    </div>
    @include('layouts.footer')
@stop
