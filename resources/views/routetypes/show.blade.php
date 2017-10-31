@extends('layouts.app')

@section('content')




<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>{{$routetype->routetype}}</h1>
<div>
     <table class="table table-striped">        
        <tbody>
            <tr>
                <td>Maximum speed:</td>
                <td> {{$routetype->maxspeed}}</td>
            </tr>                        
        </tbody>
    </table>
</div>
 <hr>
    <a href="{{url("/")}}/routetypes/{{$routetype->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['RoutetypeController@destroy', $routetype->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
