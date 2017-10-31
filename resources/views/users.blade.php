@extends('layouts.app')

@section('content')
<a href="{{url("/")}}/users/create" class="btn btn-default">Create User</a>
<h1>Users Page</h1>
@if(count($users) > 0)

@foreach($users as $user)
<div class="well">
    <h3><a href="{{url("/")}}/users/{{$user->id}}">{{$user->name}}</a></h3>
    
</div>

@endforeach
{{$users->links()}}
@else
<p>There are no users</p>
@endif
@endsection