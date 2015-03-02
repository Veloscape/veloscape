<div id="{{$id}}" class="map-form-entity">
    <div> {{$id}} </div>
    <div>
    {{ Form::label($lat, 'lat') }}
    {{ Form::text($lat, $latData, ['class' => 'lat']) }}
    </div>
    
    <div>
    {{ Form::label($lng, 'lng') }}
    {{ Form::text($lng, $lngData, ['class' => 'lng']) }}
    </div>

    <div>
    {{ Form::label($revgeo, 'reverse geocode') }}
    {{ Form::text($revgeo, '', ['class' => 'revgeo']) }}
    </div>

    <div>
    {{ Form::label($type, 'type') }}
    {{ Form::text($type, '', ['class' => 'type']) }}
    </div>
    
    <div>
    {{ Form::label($rate1, 'Safety') }}
    {{ Form::number($rate1, '0', ['class' => 'rate1']) }}
    </div>
    
    <div>
    {{ Form::label($rate2, 'Momentum') }}
    {{ Form::number($rate2, '0', ['class' => 'rate2']) }}
    </div>
    
    <div>
    {{ Form::label($rate3, 'Enjoyment') }}
    {{ Form::number($rate3, '0', ['class' => 'rate3']) }}
    </div>
    
    <div>
    {{ Form::label($rate4, 'Attractiveness') }}
    {{ Form::number($rate4, '0', ['class' => 'rate4']) }}
    </div>
    
    <div>
    {{ form::label($rate5, 'comfort') }}
    {{ form::number($rate5, '0', ['class' => 'rate5']) }}
    </div>
    
    <div>
    {{ form::label($comments, 'additional comments') }}
    </div>
    <div>
    {{ form::textarea($comments,'', ['size' => '38x3', 'class' => 'comments']) }}
    </div>
</div>
