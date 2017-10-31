@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit Routetype</h1>
{!! Form::open(['action' => ['RoutetypeController@update', $routetype->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('routetype', 'Routetype')}}
    {{Form::text('routetype', $routetype->routetype, ['class' => 'form-control', 'placeholder' => 'Type routetype'])}}
</div>
<div class="form-group">
    {{Form::label('maxspeed', 'Routetype')}}
    {{Form::number('maxspeed', $routetype->maxspeed,['class' => 'form-control'])}}
</div>

{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update Routetype', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
