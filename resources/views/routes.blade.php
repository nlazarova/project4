@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/routes/create" class="btn btn-default">Create Route</a>
<h1>Routes Page</h1>
@if(count($routes) > 0)

@foreach($routes as $route)
<div class="well">
    <h3><a href="{{url("/")}}/routes/{{$route->id}}">{{$route->name}}</a></h3>
    
</div>

@endforeach
{{$routes->links()}}
@else
<p>There are no routes</p>
@endif
@endsection