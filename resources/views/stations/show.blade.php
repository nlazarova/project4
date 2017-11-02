@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$station->name}}</h1>
<div>
    <table class="table table-striped">
        
        <tbody>
            <tr>
                <td>Station length:</td>
                <td> {{$station->length}}</td>
            </tr>
            <tr>
                <td>Route:</td>
                <td>{{$station->route_id}}</td>
            </tr>
            
        </tbody>
    </table>
   
   
    
</div>
 <hr>
    <a href="{{url("/")}}/stations/{{$stations->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['StationsController@destroy', $stations->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection