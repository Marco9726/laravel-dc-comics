@extends('layouts.app')
@section('content')

<div class="container id="showContainer">
	<div class="row justify-content-center">
		<div class="col-12 py-3">
			<div class="d-flex justify-content-between align-items-center">
				<h1>{{ $comic['title']}}</h1>
				<a href="{{ route('comics.index') }}" class="btn btn-primary">Torna all'elenco</a>
			</div>
		</div>
		@if (!empty($comic['thumb'])) {{--se la propietà 'thumb' non è vuota --}}
		<img src="{{ $comic['thumb']}}" alt="" class="w-25">
		@else
		<h5 class="text-danger">Immagine non disponile</h5>
		@endif
		<table class="table">
			<tbody>
				<tr>
					<th>Titolo</th>
					<td>{{ $comic['title'] }}</td>
				</tr>
				<tr>
					<th>Serie</th>
					<td>{{ $comic['series'] }}</td>
				</tr>
				<tr>
					<th>Prezzo</th>
					<td>{{ $comic['price'] }} &euro;</td>
				</tr>
				<tr>
					<th>Descrizione</th>
					<td>{{ $comic['description'] }}</td>
				</tr>
				<tr>
					<th>Data di uscita</th>
					<td>{{ $comic['sale_date'] }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection