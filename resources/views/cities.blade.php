@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/cities/create" class="btn btn-default">Create City</a>
<h1>Cities Page</h1>
@if(count($cities) > 0)

@foreach($cities as $city)
<div class="well">
    <h3><a href="{{url("/")}}/cities/{{$city->id}}">{{$city->name}}</a></h3>
    
</div>

@endforeach
{{$cities->links()}}
@else
<p>There are no cities</p>
@endif
@endsection