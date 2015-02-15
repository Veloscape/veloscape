@extends('map.accordion-item')

@section('content')
    
    {{ Form::text($lat) }}
    {{ Form::text($lng) }}
@stop
