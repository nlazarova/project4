@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit City</h1>
{!! Form::open(['action' => ['CityController@update', $city->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'City name')}}
    {{Form::text('name', $city->name, ['class' => 'form-control', 'placeholder' => 'Type city name'])}}
</div>

{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update City', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
