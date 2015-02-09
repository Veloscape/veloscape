@extends('layouts.master')

@section('head')
    @parent
    
 <script>
  $(function() {
      $( "#accordion" ).accordion({
          heightStyle: "fill",
            collapsible: "true"
      });
  });
  </script>
      @stop

@section('body')


<div id="accordion">
    @for ($i = 0; $i < 5; $i++)
        <h3> title </h3>
        <div class="row"> 
        @include('map.form') 
        </div>

    @endfor

</div>
@stop
