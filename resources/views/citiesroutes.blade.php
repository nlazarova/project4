@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/citiesroutes/create" class="btn btn-default">Connect Cities</a>
<h1>Connect Cities Page</h1>
@if(count($connections) > 0)

@foreach($connections as $connection)
<div class="well">
    <h3><a href="{{url("/")}}/citiesroutes/{{$connection->route_id}}">{{$connection->route->name}}</a></h3>
    
</div>

@endforeach
{{$connections->links()}}
@else
<p>There are no connections</p>
@endif
@endsection