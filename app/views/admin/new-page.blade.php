@extends('admin.master')

@section('head')
@parent
{{ HTML::style('css/summernote.css') }}
{{ HTML::script('js/summernote.min.js') }} 
{{ HTML::script('js/admin-page.js') }} 
@stop

@section('body')
@include('admin.sidenav')
    <div class="container pull-left">
        <h3>Content <i class="fa fa-angle-double-right"></i> New Page </h3>
        <hr>
        {{ Form::open() }}

        <div class="form-group">
            {{ Form::label('title', '1. Title') }}
            {{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Page Title')) }}
        </div>

        <div class="form-group">
            {{ Form::label('url', '2. Address') }}
            <div style="padding-bottom: 6px;">
                <label class="radio-inline">
                    <input type="radio" name="page-type" class="url-radio" value="event" checked>event</input>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="page-type" class="url-radio" value="event">news</input>
                </label>
            </div>
            <div class="input-group">
                <span class="input-group-addon">veloscape.org/events/</span>
                {{ Form::text('url', '', array('class' => 'form-control', 'placeholder' => 'new-page-url')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('content', '3. CSS') }}

        </div>

        <hr>
        <div class="form-group">
            {{ Form::label('content', '4. Contents') }}

        </div>

        <div id="summernote">&nbsp;</div>
        {{ Form::close() }}

    </div>
@stop
