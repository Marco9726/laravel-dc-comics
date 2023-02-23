{{-- estendo la pagina con il layout base (header,jumbo e footer)  --}}
@extends('layouts.app')

{{-- valorizzo lo yield 'content' con il seguente contenuto --}}
@section('content')

<div id="content" class="pb-2">
	<div class="container-w60">
		<h3 class="font-pt bg-my-primary text-center d-inline-block px-4">CURRENT SERIES</h3>
		<div class="row justify-content-between flex-wrap">
			{{-- ciclo i comics dall'array passato da web.php  --}}
		@foreach ($comics as $comic)
			<div class="comic-card mb-4">
				<div class="comic-img mb-3">
					<a href="{{ route('single_comic', ['id' => $comic['id']])}}">
						<img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}">
					</a>
				</div>
				<a href="{{ route('single_comic', ['id' => $comic['id']])}}" class="text-white">{{ Str::upper( $comic['series']) }}</a>
			</div>
		@endforeach
		</div>
	</div>
</div>

@endsection







