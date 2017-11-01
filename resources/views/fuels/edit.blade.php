@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit Fuel</h1>
{!! Form::open(['action' => ['FuelController@update', $fuel->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Fuel name')}}
    {{Form::text('name', $fuel->name, ['class' => 'form-control', 'placeholder' => 'Type fuel name'])}}
</div>

{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update Fuel', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
