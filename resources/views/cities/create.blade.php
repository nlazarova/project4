@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create City</h1>
{!! Form::open(['action' => 'CityController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'City name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Type city name'])}}
</div>

 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit City', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
