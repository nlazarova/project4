@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$fuel->name}}</h1>
<div>
    
</div>
 <hr>
    <a href="{{url("/")}}/fuels/{{$fuel->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['FuelController@destroy', $fuel->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
