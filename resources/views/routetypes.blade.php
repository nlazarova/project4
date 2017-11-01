@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/routetypes/create" class="btn btn-default">Create Routetype</a>
<h1>Routetypes Page</h1>
@if(count($routetypes) > 0)

@foreach($routetypes as $routetype)
<div class="well">
    <h3><a href="{{url("/")}}/routetypes/{{$routetype->id}}">{{$routetype->routetype}}</a></h3>
    
</div>

@endforeach
{{$routetypes->links()}}
@else
<p>There are no routetypes</p>
@endif
@endsection