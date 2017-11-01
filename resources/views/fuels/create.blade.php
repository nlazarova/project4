@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create Fuel</h1>
{!! Form::open(['action' => 'FuelController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Fuel name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Type fuel name'])}}
</div>

 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit Fuel', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
