@extends('admin.main')

@section('main')
<div class="container-fluid">

{{ Form::open() }}
    <h1>Login Required</h1>

    @if($errors->has())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning">
            {{ $error }}
        </div>
        @endforeach
    @endif

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Login', array('class' => 'btn btn-default')) }}
    </div>

{{ Form::close() }}
</div>
@stop
