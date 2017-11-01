@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$route->name}}</h1>
<div>
    <table class="table table-striped">
        
        <tbody>
            <tr>
                <td>Route length:</td>
                <td> {{$route->length}}</td>
            </tr>
            <tr>
                <td>Routetype:</td>
                <td>{{$route->routetype_id}}</td>
            </tr>
            
        </tbody>
    </table>
   
   
    
</div>
 <hr>
    <a href="{{url("/")}}/routes/{{$route->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['RouteController@destroy', $route->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
