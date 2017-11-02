@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-default">Back</a>
<h1>Create Connection</h1>
{!! Form::open(['action' => 'CityRouteController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('city_id_from', 'City from')}}
    {{Form::select('city_id_from', $cities, null, ['class' => 'form-control', 'placeholder' => 'Choose city'])}}
</div>
<div class="form-group">
    {{Form::label('city_id_to', 'City to')}}
    {{Form::select('city_id_to', $cities, null, ['class' => 'form-control', 'placeholder' => 'Choose city'])}}
</div>
<div class="form-group">
    {{Form::label('route_id', 'Route')}}
    {{Form::select('route_id', $routes, null, ['class' => 'form-control', 'placeholder' => 'Choose route'])}}
</div>


 {{ Form::hidden('url',URL::previous()) }}
{{Form::submit('Submit Connection', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection
