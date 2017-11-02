@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$connection->route->name}}</h1>
<div>
      @foreach($connections as $connection)
<div class="well">
    <h3><a href="{{url("/")}}/citiesroutes/{{$connection->route_id}}">{{$connection->route->name}}</a></h3>
    
</div>

@endforeach 
    
</div>
 <hr>
    <a href="{{url("/")}}/citiesroutes/{{$connection->route_id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['CityRouteController@destroy', $connection->route_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
