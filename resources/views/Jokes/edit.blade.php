@extends('layout.main')

@section('content')

	<h1>
		Edit {{$joke->title}}
	</h1>

	<div class="edit_page container">
		<form action="{{route('Jokes.update', $joke->id)}}" method="post" class="w-100 p-3 my-5 d-flex flex-column">
		@csrf
		@method('PATCH')
		<div class="mb-2 fs-5">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="w-100 bg-light rounded-2" value="{{$joke->title}}">
		</div>
		<div class="mb-2 fs-5">
			<label for="body">Body</label>
			<textarea type="text" name="body" id="body" class="w-100 bg-light rounded-2">{{$joke->body}}</textarea>
		</div>
		<div class="mb-2 fs-5">
			<label for="author">Author</label>
			<input type="text" name="author" id="author" class="w-100 bg-light rounded-2" value="{{$joke->author}}">
		</div>
		<input class="btn btn-success fw-bold fs-5" type="submit" value="Salva">
	</form>
	</div>
@endsection