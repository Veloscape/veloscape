@extends('layouts.mobile-master')

@section('head')
    @parent
    @include('js.mobile.map-blade')
    @include('js.mobile.map')
    @include('js.mobile.map-style')
    @include('js.mobile.map-events')
@stop

@section('body')
    <div>
    <div class="map-hint">
        <div class="content"><span>Touch the map to place route markers</span></div>
        <div class="background"></div>
    </div>
    <div class="map-container">
    <div id="map" style="position:absolute; top:0; left:0; height:100%; width:100%"></div>
    </div>

    <div class="tab tab-dismiss tab-horo-fill"></div>
    <div class="tab tab-disable-map tab-horo-fill">
    </div> 
    <div class="tab tab-marker tab-horo-fill">
        <div>
            <div><div id="road" class="btn marker-type btn-success">RD</div></div>
            <div><div id="bikelane" class="btn marker-type btn-info">C</div></div>
            <div><div id="seperatedcycle" class="btn marker-type btn-primary">S</div></div>
            <div><div id="sharedfootpath" class="btn marker-type btn-default">SF</div></div>
            <div><div id="footpath" class="btn marker-type btn-danger">F</div></div>
        </div>
    </div>

    {{ Form::open() }}
    <div class="mobile submit-btn">
    <button class="btn btn-warning" type="submit">
        <span>SUBMIT</span>
    </button>
    </div>
    <div class="form-data" style="display: none"></div>
    {{ Form::close() }}
    </div>
@stop
