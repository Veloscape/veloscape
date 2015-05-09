@extends('layouts.master')

@section('head')
    <link rel="shortcut icon" href=" {{ URL::asset('img/favicon.ico') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/_launcher.css') }}
@stop

@section('body')
<div class="bg"></div>

<div class="landing">
    {{ HTML::image('img/veloscape-gear-black.png', 'veloscape logo', array('class' => 'img-responsive logo')) }}
    <div class="landing-text" style="text-align:center;">
        <h1><strong>VELOSCAPE</strong></h1>
        <h2><em><strong>a Curating Cities project</strong></em></h2>
        <h3 class="h2-small"><small>coming back soon</small></h2>
    </div>
    <div style="text-align: center">
        <div class="media-icons">
            <a class="btn" href="mailto:veloscape@unsw.edu.au"><i class="fa fa-envelope fa-2x fa-fw"></i></a>
            
            <a class="btn" href="https://www.facebook.com/veloscape" role="button"><i class="fa fa-facebook fa-2x fa-fw"></i></a>
        </div>
    </div>
    
</div>


@stop
