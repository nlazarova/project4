@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create Route</h1>
{!! Form::open(['action' => 'RouteController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Route name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Type route name'])}}
</div>
<div class="form-group">
    {{Form::label('length', 'Route length')}}
    {{Form::number('length', null,['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('routetype_id ', 'Routetype')}}
    {{Form::select('routetype_id', $routetypes, null, ['class' => 'form-control', 'placeholder' => 'Choose routetype'])}}
</div>

 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit Route', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
