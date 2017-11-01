@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create Routetype</h1>
{!! Form::open(['action' => 'RoutetypeController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('routetype', 'Routetype')}}
    {{Form::text('routetype', '', ['class' => 'form-control', 'placeholder' => 'Type routetype'])}}
</div>
<div class="form-group">
    {{Form::label('maxspeed', 'Routetype')}}
    {{Form::number('maxspeed', null,['class' => 'form-control'])}}
</div>

 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit Routetype', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
