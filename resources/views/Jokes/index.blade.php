@extends('layout.main')

@section('content')
	<div class="index_page container my-5">

		@if (session('deleted'))
			<div class="alert alert-success">
				<strong>{{session('deleted')}}</strong>
				succesfully deleted.
			</div>
		@endif

		<table class="table">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<th>Body</th>
				<th colspan="3">Actions</th>
			</thead>
			<tbody>
				@foreach ($jokes as $joke)
					<tr>
						<td>{{$joke->id}}</td>
						<td>{{$joke->title}}</td>
						<td>{{$joke->author}}</td>
						<td>{{$joke->body}}</td>
						<td><a href="{{route('Jokes.show', $joke->id)}}">Details</a></td>
						<td><a href="{{route('Jokes.edit', $joke->id)}}">Edit</a>
						</td>
						<td>
							<form 
							action="{{ route('Jokes.destroy', $joke->id) }}"
							method="post">
							@csrf @method('DELETE')
								<input class="fw-bold text-danger" type="submit" value="DELETE">
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- {{$jokes->links()}} --}}
	</div>
@endsection