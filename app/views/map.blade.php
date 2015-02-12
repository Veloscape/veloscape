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
        <div class="row">
            <form>
                <div class="col-sm-5 col-md-offset-3 form-group">
                    <input type="text" class="form-control" id="locationSearch" placeholder="Enter a location to begin">
                </div>
                <div class="col-sm-1 form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            
        </div>

        <div class="row">

            <div class="col-md-6" id="map-container" style="background-color: #999999; padding-bottom: 45%;">
                @include('map.map')
            </div>
            
            <div class="col-md-6" id="feedback-container" style="background-color: #eeeeee;">
                @include('map.accordion')
            </div>
        </div>
    </div>
    @include('layouts.footer')
@stop
