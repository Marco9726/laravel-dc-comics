@extends('layouts.app')
@section('content')
<div id="main-header" class="p-5 mb-4">
	<h1 class="font-pt">DC COMICS</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="d-flex">
				<h2>Tutti i fumetti</h2>
				<a href="#" class="btn btn-primary">Aggiungi fumetto</a>
			</div>
		</div>
		{{-- TABELLA --}}
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Immagine</th>
				<th>Titolo</th>
				<th>Serie</th>
				<th>Prezzo</th>
				<th>Descrizione</th>
				<th>Data di uscita</th>
				<th class="text-center">azioni</th>
			</thead>
			<tbody>
				@foreach ($comics as $comic)
					<tr>
						<td>{{ $comic['id'] }}</td>
						<td><img src="{{ $comic['thumb'] }}" alt="" class="img-fluid"></td>
						<td>{{ $comic['title'] }}</td>
						<td>{{ $comic['series'] }}</td>
						<td>{{ $comic['price'] }}</td>
						<td>{{ $comic['description'] }}</td>
						<td>{{ $comic['sale_date'] }}</td>
						<td>
							<a href="#" class="btn btn-info btn-sm btn-square" title="Dettaglio pasta">
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