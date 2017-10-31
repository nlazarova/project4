@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create User</h1>
{!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Type user name'])}}
</div>
<div class="form-group">
    {{Form::label('email', 'e-mail')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Type user e-mail'])}}
</div>
<div class="form-group">
    {{Form::label('user_role_id', 'Role')}}
    {{Form::select('user_role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Choose role'])}}
</div>

<div class="form-group">
    {{Form::label('password', 'Password')}}
    {{Form::password('password', ['class' => 'form-control'])}}
</div>
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit User', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
