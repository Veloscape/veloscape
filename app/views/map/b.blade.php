@extends('layouts.bootswatch')

@section('title')
    Veloscape Dev
@stop


@section('body')

	@include('velo.header')
	@include('velo.nav')

    <div class="row" style="padding:4%;">

        <div class="col-md-6" style="background-color: #999999; padding-bottom: 45%">
        </div>
        
        <div class="col-md-6" style="background-color: #eeeeee">
            @include('velo.form') 
        <!-- end of right col-md-6 -->
        </div>
    </div>

@stop


