@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$user->name}}</h1>
<div>
    <table class="table table-striped">
        
        <tbody>
            <tr>
                <td>e-mail:</td>
                <td> {{$user->email}}</td>
            </tr>
            <tr>
                <td>role:</td>
                <td>{{$user->user_role_id}}</td>
            </tr>
            
        </tbody>
    </table>
   
   
    
</div>
 <hr>
    <a href="{{url("/")}}/users/{{$user->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
