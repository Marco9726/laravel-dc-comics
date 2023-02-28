@extends('layouts.app')
@section('content')
<section id="index-content" class="bg-my-primary py-4">
	<div class="container py-3 bg-light rounded-3">
		<h1 class="font-pt mb-5 fw-bolder">DC COMICS</h1>
		<div class="row px-2">
			<div class="col-12 p-0">
				<div class="d-flex justify-content-between">
					<h2>Tutti i fumetti</h2>
					<a href="{{ route('comics.create')}}" class="btn btn-success" id="add-comic"><i class="fa-solid fa-plus"></i> Aggiungi un nuovo fumetto</a>
				</div>
			</div>
			{{-- TABELLA --}}
			<table class="table">
				<thead>
					<th>ID</th>
					<th class="col-2">Immagine</th>
					<th>Titolo</th>
					<th>Serie</th>
					<th>Prezzo</th>
					<th class="col-4">Descrizione</th>
					<th class="col-2">Data di uscita</th>
					<th class="col-1 text-center">azioni</th>
				</thead>
				<tbody>
					@foreach ($comics as $comic)
						<tr>
							<td>{{ $comic['id'] }}</td>
							<td>
								@if (!empty($comic['thumb']))
								<img src="{{ $comic['thumb'] }}" alt="" class="w-75">
								@else
								<h5 class="text-danger">immagine mancante</h5>
								<img src="https://i.imgflip.com/4/lphi1.jpg"  class="w-75" alt="">
								@endif
							</td>
							<td>{{ $comic['title'] }}</td>
							<td>{{ $comic['series'] }}</td>
							<td>{{ $comic['price'] }}&euro;</td>
							<td>{{ $comic['description'] }}</td>
							<td>{{ $comic['sale_date'] }}</td>
							<td class="text-center">
								{{-- link alla page show  --}}
								<a href="{{ route('comics.show', ['comic' => $comic['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio pasta">
									<i class="fas fa-eye"></i>
								</a>
								{{-- link alla page edit  --}}
								<a href="{{ route('comics.edit', ['comic' => $comic['id']])}}" class="btn btn-warning btn-sm btn-square" title="Dettaglio pasta">
									<i class="fas fa-edit"></i>
								</a>
								{{-- DESTROY --}}
								<form action="{{ route('comics.destroy', ['comic' => $comic->id])}}" class="d-inline-block" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-sm btn-square btn-danger">
										<i class="fas fa-trash"></i>
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</section>

@endsection