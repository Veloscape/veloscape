@extends('layouts.master')

@section('head')
    @parent
    {{ HTML::style('css/admin.css') }}
@stop

@section('header')
    @include('admin.sidenav')
@stop

@section('body')
    <div class="main">
        @yield('main')
    </div>
@stop
