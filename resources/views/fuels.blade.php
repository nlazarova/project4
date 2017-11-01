@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/fuels/create" class="btn btn-default">Create Fuel</a>
<h1>Fuels Page</h1>
@if(count($fuels) > 0)

@foreach($fuels as $fuel)
<div class="well">
    <h3><a href="{{url("/")}}/fuels/{{$fuel->id}}">{{$fuel->name}}</a></h3>
    
</div>

@endforeach
{{$fuels->links()}}
@else
<p>There are no fuels</p>
@endif
@endsection