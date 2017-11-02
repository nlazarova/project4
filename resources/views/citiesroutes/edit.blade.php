@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Edit User</h1>
{!! Form::open(['action' => ['UserController@update', $user->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Type user name'])}}
</div>
<div class="form-group">
    {{Form::label('email', 'e-mail')}}
    {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Type user e-mail'])}}
</div>
<div class="form-group">
    {{Form::label('user_role_id', 'Role')}}
    
    {{Form::select('user_role_id', $roles, $user->user_role_id, ['class' => 'form-control'])}}
    
</div>

<div class="form-group">
    {{Form::label('password', 'Password')}}
    {{Form::password('password', ['class' => 'form-control', $user->password])}}
</div>
{{Form::hidden('_method', 'PUT')}}
 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Update User', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
