<div id="blank" class="map-form-entity">
    <div class="form-hidden">
        <div>
        {{ Form::label($lat, 'lat') }}
        {{ Form::text($lat, '', ['class' => 'lat']) }}
        </div>
        
        <div>
        {{ Form::label($lng, 'lng') }}
        {{ Form::text($lng, '', ['class' => 'lng']) }}
        </div>

        <div>
        {{ Form::label($revgeo, 'reverse geocode') }}
        {{ Form::text($revgeo, '', ['class' => 'revgeo']) }}
        </div>
    </div>

    <div class="form-section">
        <div class="section-title">
            <span class="h4"><span class="blue">1.</span> Which option matches this location best?</span>
        </div>
        <div class="section-centered">
            <button type="button" class="btn btn-path path-road" data-type="road">
                <span class="btn-path-label">Road</span>
            </button>
            <button type="button" class="btn btn-path path-bike" data-type="bikelane">
                <span class="btn-path-label">Bike Lane</span>
            </button>
            <button type="button" class="btn btn-path path-cycleway" data-type="cycleway">
                <span class="btn-path-label">Seperated Cycleway</span>
            </button>
            <button type="button" class="btn btn-path path-foot" data-type="footpath">
                <span class="btn-path-label">Footpath</span>
            </button>
            <button type="button" class="btn btn-path path-shared-foot" data-type="sharedfootpath">
                <span class="btn-path-label">Shared Footpath</span>
            </button>
            <button type="button" class="btn btn-path path-offroad" data-type="offroad">
                <span class="btn-path-label">Off-Road</span>
            </button>
            <div class="form-hidden">
            {{ Form::label($type, 'type') }}
            {{ Form::text($type, 'none', ['class' => 'type']) }}
            </div>
        </div>
    </div>

    
    <div class="form-section">
        <div class="section-title">
            <span class="h4"><span class="blue">2.</span> How would you rate this section of your route?</span>
        </div>
        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Safety&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info info-safety">
                Where do you feel exposed to danger, and where do you feel totally safe?
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="0">
                <span>Neutral</span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate1, '0', ['class' => 'rate-input']) }}
            </div>
        </div>

        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Momentum&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info info-momentum">
                Is this part of your ride interrupted by long traffic lights, fragmented cycleways and dodgy road surfaces, or are you able to cruise comfortably and set your own pace?
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="1">
                <span>Neutral</span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate2, '0', ['class' => 'rate-input']) }}
            </div>
        </div>
        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Enjoyment&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info info-enjoyment">
                Where are the beautiful views, the thrills and the mellow moments on your ride? And which parts of your ride do you most dislike?
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="2">
                <span>Neutral</span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate3, '0', ['class' => 'rate-input']) }}
            </div>
        </div>
    </div>    
    <div class="section-comment">
        <div class="section-reverse">
            <span class="h4"><span class="blue">3.</span> Any additional thoughts or comments?</span>
        </div>
            <textarea id="{{$comments}}" name="{{$comments}}" class="form-control comments" placeholder="(Max 1000 characters)"></textarea>
    </div>
</div>
