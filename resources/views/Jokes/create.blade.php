@extends('layout.main')

@section('content')
	<div class="create_page container">
		<form action="{{route('Jokes.store')}}" method="POST" class="w-100 p-3 my-5 d-flex flex-column">
		@csrf
		<div class="mb-2 fs-5">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="w-100 bg-light rounded-2">
		</div>
		<div class="mb-2 fs-5">
			<label for="body">Body</label>
			<textarea type="text" name="body" id="body" class="w-100 bg-light rounded-2"></textarea>
		</div>
		<div class="mb-2 fs-5">
			<label for="author">Author</label>
			<input type="text" name="author" id="author" class="w-100 bg-light rounded-2">
		</div>
		<input class="btn btn-success fw-bold fs-5" type="submit" value="Salva">
	</form>
	</div>
@endsection