@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create station</h1>
{!! Form::open(['action' => 'StationsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'station name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Type station name'])}}
</div>

<div class="form-group">
    {{Form::label('route_id ', 'Route')}}
    {{Form::select('route_id', $routes, null, ['class' => 'form-control', 'placeholder' => 'Choose route'])}}
</div>

 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit Station', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection