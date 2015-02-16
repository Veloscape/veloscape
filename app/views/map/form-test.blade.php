@extends('map.accordion-item')

@section('content')
    <div>
    {{ Form::label($lat, 'lat') }}
    {{ Form::text($lat) }}
    </div>
    
    <div>
    {{ Form::label($lng, 'lng') }}
    {{ Form::text($lng) }}
    </div>

    <div>
    {{ Form::label($revgeo, 'reverse geocode') }}
    {{ Form::text($revgeo) }}
    </div>

    <div>
    {{ Form::label($type, 'type') }}
    {{ Form::text($type) }}
    </div>
    
    <div>
    {{ Form::label($rate1, 'Safety') }}
    {{ Form::number($rate1, '0') }}
    </div>
    
    <div>
    {{ Form::label($rate2, 'Momentum') }}
    {{ Form::number($rate2, '0') }}
    </div>
    
    <div>
    {{ Form::label($rate3, 'Enjoyment') }}
    {{ Form::number($rate3, '0') }}
    </div>
    
    <div>
    {{ Form::label($rate4, 'Attractiveness') }}
    {{ Form::number($rate4, '0') }}
    </div>
    
    <div>
    {{ form::label($rate5, 'comfort') }}
    {{ form::number($rate5, '0') }}
    </div>
    
    <div>
    {{ form::label($comments, 'additional comments') }}
    </div>
    <div>
    {{ form::textarea($comments,'', array('size' => '38x3')) }}
    </div>
@stop
