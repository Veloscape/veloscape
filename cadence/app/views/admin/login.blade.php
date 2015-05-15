@extends('admin.master')

@section('title')
    login - Cadence | Veloscape
@stop

@section('body')
<div class="login bg">
    <div class="login centered">
    <div class="btn-wordpress">
        <a href="{{$url_wordpress}}">
            <button type="button" class="btn btn-default btn-info">Click here to access Wordpress dashboard</button>
        </a>
    </div>

    {{ Form::open(array('route' => 'admin login')) }}
        <h1>Cadence</h1>

        @if($errors->has())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning">
                {{ $error }}
            </div>
            @endforeach
        @endif

        <div class="form-group">
            {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => "Username")) }}
        </div>

        <div class="form-group">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Sign in', array('class' => 'btn btn-default')) }}
        </div>

    {{ Form::close() }}
    </div>
</div>
@stop
