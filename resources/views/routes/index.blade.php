@extends('layouts.master')

@section('title', 'Books')

@section('style')

<link rel="stylesheet" type="text/css" href="">

@endsection

@section('content')
<div class="container">
<div class="row">
	<div class="col-md-6">
		<h1>Books</h1>
	</div>	
</div>
<div class="row">
<table class="table">
	<tr>
		<td>
			Book Title
		</td>
		<td>
			User Role
		</td>
		<td>
			Edit Book
		</td>
		<td>
			Delete Book
		</td>
	</tr>
	@foreach($books as $book)
	<tr>
		<td>
			<a href="{{ route('book.show', $book->id)}}">
				{{ $book->title }}				
			</a>			
		</td>
		<td>
			{{ $book->role }}
		</td>
		<td>
			<a href="{{ route('edit_book_info', $book->id) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			Delete</a>
		</td>
	</tr>
@endforeach
</table>
<div class="row">
	<div class="col-md-6">
		<a href="{{ route('add_new_book') }}" class="btn btn-info">Add New book</a>
	</div>
</div>
</div>
</div>
@endsection