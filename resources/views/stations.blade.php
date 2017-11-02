@extends ('layouts.app')




@section('content')
<div class="container">
<div class="row">
	<div class="col-md-6">
		<h1>Stations Page</h1>
	</div>	
</div>
<div class="row">
<table class="table">
	<tr>
		<td>
			Station Title
		</td>
		<td>
			-----
		</td>
		<td>
			Edit Station
		</td>
		<td>
			Delete Station
		</td>
	</tr>
	@foreach($stations as $station)
	<tr>
		<td>
			<a href="{{ route('stations.show', $station->id)}}">
				{{ $station->name }}				
			</a>			
		</td>
				
		<td>
			<a href="{{ route('edit_station_info', $station->id) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			Delete
		</td>
	</tr>
@endforeach
</table>
<div class="row">
	<div class="col-md-6">
		<a href="{{ route('stations.create') }}" class="btn btn-info">Add New station</a>
	</div>
</div>
</div>
</div>
@endsection   
 