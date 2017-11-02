@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit station</h1>
{!! Form::open(['action' => ['StationsController@update', $station->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Station name')}}
    {{Form::text('name', $station->name, ['class' => 'form-control', 'placeholder' => 'Type station name'])}}
</div>

<div class="form-group">
    {{Form::label('route_id ', 'Route')}}
    {{Form::select('route_id', $routes, $station->route_id, ['class' => 'form-control', 'placeholder' => 'Choose route'])}}
</div>
{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update Station', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
