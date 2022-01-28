<header class="py-3 bg-warning">
	<div class="container d-flex justify-content-between">
		<div class="brand">
			<a class="text-uppercase text-decoration-none text-black fw-bold" href="{{route('home')}}">
				<img src="{{asset('imgs/Caprette soloLogo.svg')}}" alt="">
				<span>Caprette joke: le barzellette delle caprette</span>
			</a>
		</div>
		<nav>
			<ul class="d-flex align-content-center">
				<li class="list-unstyled ms-3">
					<a class="fw-bold fs-5 text-black text-decoration-none" href="{{route('Jokes.index')}}">
						Archivio
					</a>
				</li>
				<li class="list-unstyled ms-3">
					<a class="fw-bold fs-5 text-black text-decoration-none" href="{{route('Jokes.create')}}">
						Crea
					</a>
				</li>
				<li class="list-unstyled ms-3">
					<a class="fw-bold fs-5 text-black text-decoration-none" href="">
						Random
					</a>
				</li>
			</ul>
		</nav>
		
	</div>
</header>