@extends('admin.master')

@section('title')
    login - Veloscape Cadence
@stop

@section('body')
<div class="login bg">
    <div class="login centered">

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
