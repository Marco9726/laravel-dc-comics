@extends('layouts.app')
@section('content')

<div class="container my-3 py-3 bg-light">
	<h1 class="font-pt mb-5 fw-bolder">DC COMICS</h1>
	<div class="row px-2">
		<div class="col-12 p-0">
			<div class="d-flex">
				<h2>Tutti i fumetti</h2>
				{{-- <a href="#" class="btn btn-primary">Aggiungi fumetto</a> --}}
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
						<td><img src="{{ $comic['thumb'] }}" alt="" class="w-75"></td>
						<td>{{ $comic['title'] }}</td>
						<td>{{ $comic['series'] }}</td>
						<td>{{ $comic['price'] }}&euro;</td>
						<td>{{ $comic['description'] }}</td>
						<td>{{ $comic['sale_date'] }}</td>
						<td class="text-center">
							<a href="{{ route('comics.show', ['comic' => $comic['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio pasta">
								<i class="fas fa-eye"></i>
							</a>
							<a href="#" class="btn btn-warning btn-sm btn-square" title="Dettaglio pasta">
								<i class="fas fa-edit"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection