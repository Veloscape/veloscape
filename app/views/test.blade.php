@extends('layouts.master')

@section('head')
    @parent
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    @include('js.map')
    @include('js.map-style')
    @include('js.map-events')
    <script type="text/javascript">
            
        function addAccordion() {
            $.ajax({
                url: '{{URL::route('partialMarkerFeedback')}}',
                    success: function(data) {
                    $('#accordion').append(data);
                    $('#accordion').accordion("refresh");
                    }
            });
        }

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
    
    <div class="container">
        <div class="row">

            <div class="col-md-6" id="map-container" style="background-color: #999999; padding-bottom: 45%;">
                <button class="btn btn-default" type="button" onclick="addAccordion()">Create new marker</button>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            <div class="col-md-6" id="feedback-container" style="background-color: #eeeeee;">
                @include('map.accordion')
            </div>
        </div>
    </div>
@stop
