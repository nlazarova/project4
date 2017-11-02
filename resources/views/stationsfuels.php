@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/stationsfuels/create" class="btn btn-default">Create Assortment</a>
<h1>Station Product Range Page</h1>
@if(count($stations) > 0)

@foreach($stations as $station)
<div class="well">
    <h3><a href="{{url("/")}}/stationsfuels/{{$station->station_id}}">{{$station->station->name}}</a></h3>
    
</div>

@endforeach
{{$stations->links()}}
@else
<p>There are no records</p>
@endif
@endsection