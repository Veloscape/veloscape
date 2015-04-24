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
            <span class="h4">Which option most accurately describes the type of surface encountered along this section of your journey</span>
        </div>
        <div class="section-centered">
            <button type="button" class="btn btn-path path-road" data-type="road">
                <i class="fa fa-check pull-right"></i>
                <span class="btn-path-label">Road</span>
            </button>
            <button type="button" class="btn btn-path path-bike" data-type="bikelane">
                <span class="btn-path-label">Bike Lane</span>
                <i class="fa fa-check pull-right"></i>
            </button>
            <button type="button" class="btn btn-path path-cycleway" data-type="cycleway">
                <span class="btn-path-label">Seperated Cycleway</span>
                <i class="fa fa-check pull-right"></i>
            </button>
            <button type="button" class="btn btn-path path-foot" data-type="footpath">
                <span class="btn-path-label">Footpath</span>
                <i class="fa fa-check pull-right"></i>
            </button>
            <button type="button" class="btn btn-path path-shared-foot" data-type="sharedfootpath">
                <span class="btn-path-label">Shared Footpath</span>
                <i class="fa fa-check pull-right"></i>
            </button>
            <button type="button" class="btn btn-path path-null active" data-type="none">
                <span class="btn-path-label">Non-descript</span>
                <i class="fa fa-check pull-right"></i>
            </button>
            <div class="form-hidden">
            {{ Form::label($type, 'type') }}
            {{ Form::text($type, 'none', ['class' => 'type']) }}
            </div>
        </div>
    </div>

    
    <div class="form-section">
        <div class="section-title">
            <span class="h4">How would you rate the conditions along this section of your journey</span>
        </div>
        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Safety&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.         
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="0">
                <span></span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate1, '0', ['class' => 'rate-input']) }}
            </div>
        </div>

        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Momentum&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.         
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="1">
                <span></span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate2, '0', ['class' => 'rate-input']) }}
            </div>
        </div>
        <div class="section">
            <abbr title="" class="rate-label"><span class="h4">Enjoyment&nbsp;&nbsp;</span><i class="fa fa-info-circle"></i></abbr>
            <div class="rate-info">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.         
            </div> 
            <div  class="noUi-slider slider-options">
            </div>
            <div class="rate-value" data-set="2">
                <span></span>
            </div>
            <div class="form-hidden">
                {{ Form::number($rate3, '0', ['class' => 'rate-input']) }}
            </div>
        </div>
    </div>    
    <div class="section-comment">
        <div class="section-reverse">
            <span class="h4">Any additional thoughts or comments you would like to share about this section of your journey</span>
        </div>
            <textarea id="{{$comments}}" name="{{$comments}}" class="form-control comments" placeholder="(Max 250 characters)"></textarea>
    </div>
</div>
