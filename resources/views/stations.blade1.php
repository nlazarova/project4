@extends ('layouts.app')
@section('content')
<a href="{{url("/")}}/stations/create" class="btn btn-default">Create Stations</a>
<h1>Stations Page</h1>
@if(count($stations) > 0)

@foreach($stations as $station)
<div class="well">
  <h3><a href="{{url("/")}}/stations/{{$station->id}}">{{$station->name}}</a></h3>  
    
</div>
@endforeach
{{$stations->links()}}
@else
<p>There are no stations</p>
@endif
@endsection    
 