@extends('admin.master')

@section('body')
@include('admin.sidenav')
<div class="main">
    <div class="container-fluid">
        <div class="tb-routes">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>description</th>
                    <th>start loc</th>
                    <th>end loc</th>
                    <th>date added</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($routes as $route)
                        <tr>
                            <th>{{$route->id}}</th>
                            <th>{{$route->title}}</th>
                            <th>{{$route->desc}}</th>
                            <th>{{$route->markers->first()->rev_geo }}</th>
                            <th>{{$route->markers->last()->rev_geo }}</th>
                            <th>{{$route->updated_at}}</th>
                            <th>
                                <a href="/maproute?id={{$route->id}}">
                                    select
                                </a>
                            </th>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table> 
        </div>
    </div>
</div>
@stop

