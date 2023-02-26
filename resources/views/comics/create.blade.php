@extends('layouts.app')
@section('content')

<section id="form-section" class="py-5">
	<div class="container rounded-3">
		<div class="row justify-content-center">
			<div class="col-12 py-3">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h1>Inserimento nuovo fumetto</h1>
					<a href="{{ route('comics.index') }}" class="btn btn-warning">Torna all'elenco</a>
				</div>
				<div>
					{{-- VISUALIZZAZIONE ERRORI  --}}
					@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li class="fs-4">{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					{{-- FROM  --}}
					<form action="{{ route('comics.store') }}" method="POST">
						@csrf
						<div class="form-group mb-3">
							<label for="input-title" class="control-label">Titolo</label>
							<input type="text" id="input-title" name="title" class="form-control" placeholder="Inserisci titolo">
							@error('title')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-type" class="control-label">Tipologia</label>
							<select type="text" id="input-type" name="type" class="form-control">
								<option value="comic-book">Comic-book</option>
								<option value="graphic-novel">Graphic-novel</option>
							</select>
						</div>
						<div class="form-group mb-3">
							<label for="input-series" class="control-label">Serie</label>
							<input type="text" id="input-series" name="series" class="form-control" placeholder="Inserisci serie">
							@error('series')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-price" class="control-label">Prezzo</label>
							<input type="number" id="input-price" name="price" class="form-control" placeholder="Inserisci prezzo">
							@error('price')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-image" class="control-label">Immagine</label>
							<input type="text" id="input-image" name="thumb" class="form-control" placeholder="Inserisci un link per l'immagine">
						</div>
						<div class="form-group mb-3">
							<label for="input-date" class="control-label">Data</label>
							<input type="date" id="input-date" name="sale_date" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label for="input-description" class="control-label">Descrizione</label>
							<textarea id="input-description" name="description" class="form-control" placeholder="Inserisci una descrizione" rows="10"></textarea>
						</div>
						<div class="form-group mb-3">
							<button type="submit" class="btn btn-primary">Invia</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection