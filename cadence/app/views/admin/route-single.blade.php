@extends('admin.master')

@section('title')
    {{$route->title}} - Cadence | Veloscape
@stop

@section('body')
@include('admin.sidenav')
<div class="main">
    <div class="container-fluid">
        <div>
            <a href="{{ URL::route('admin routes') }}">return to list</a>
            <h3>Route :: {{ $route->title }}</h3>
            <p>{{$route->desc}}</p>
            <p>{{$route->created_at}}</p>
        </div>
        <div class="tb-routes">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>location</th>
                            <th>lat</th>
                            <th>lng</th>
                            <th>type</th>
                            <th>safety</th>
                            <th>momentum</th>
                            <th>enjoyment</th>
                            <th>comments</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($route->markers as $marker)
                        <tr>
                            <th>{{$marker->marker_no}}</th>
                            <th>{{$marker->rev_geo}}</th>
                            <th>{{$marker->lat}}</th>
                            <th>{{$marker->lng}}</th>
                            @foreach ($marker->values as $value)
                                <th>{{$value->value}}</th>
                            @endforeach
                            <th>
                                <a href="/admin/cadence/routes/maproute?id={{$route->id}}">
                                    delete
                                </a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
