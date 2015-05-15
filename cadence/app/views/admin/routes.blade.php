@extends('admin.master')

@section('body')
@include('admin.sidenav')
<div class="main">
    <div class="container-fluid">
        <div>
            <h3>Routes :: all</h3>
            <form action="{{ Request::url() }}?export=csv" method="POST">
                <button type='submit' class="btn btn-default">Export to CSV</button>
            </form>
        </div>
        <div class="tb-routes">
            <div class="table-responsive">
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
                                    <a href="/admin/cadence/routes/maproute?id={{$route->id}}">
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
</div>
@stop

