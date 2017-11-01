@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit Route</h1>
{!! Form::open(['action' => ['RouteController@update', $route->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Route name')}}
    {{Form::text('name', $route->name, ['class' => 'form-control', 'placeholder' => 'Type route name'])}}
</div>
<div class="form-group">
    {{Form::label('length', 'Route length')}}
    {{Form::number('length', $route->length, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('routetype_id ', 'Routetype')}}
    {{Form::select('routetype_id', $routetypes, $route->routetype_id, ['class' => 'form-control', 'placeholder' => 'Choose routetype'])}}
</div>
{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update Route', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
