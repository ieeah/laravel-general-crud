@extends('layout.main')

@section('content')
	<div class="show_page container">
		<h3>
			{{$joke->title}}
		</h3>
		<h6>
			{{$joke->author}}
		</h6>

		<p>
			{{$joke->body}}
		</p>

		<a href="{{route('Jokes.index')}}">Back to Archive</a>
	</div>
@endsection