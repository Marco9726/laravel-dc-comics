@extends('layouts.app')
@section('content')

<section id="form-section" class="py-5">
	<div class="container rounded-3">
		<div class="row justify-content-center">
			<div class="col-12 py-3">
				<div class="d-flex justify-content-between align-items-center mb-4">
					<h1>Modifica info fumetto</h1>
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
					<form action="{{ route('comics.update', $comic->id) }}" method="POST">
						@csrf
						<div class="form-group mb-3">
							<label for="input-title" class="control-label">Titolo</label>					{{--se old('title') risulta vera, viene mostrata --}}
							<input type="text" id="input-title" name="title" class="form-control" placeholder="Inserisci titolo" value="{{ old('title') ?? $comic->title }}">
							@error('title')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-type" class="control-label">Tipologia</label>
							<select type="text" id="input-type" name="type" class="form-control">
								<option value="comic-book" @selected(old('type', $comic->type) == 'comic-book')>Comic-book</option>
								<option value="graphic-novel" @selected(old('type', $comic->type) == 'graphic-novel')>Graphic-novel</option>
							</select>
						</div>
						<div class="form-group mb-3">
							<label for="input-series" class="control-label">Serie</label>              {{--se old('series') risulta vera, viene mostrata --}}
							<input type="text" id="input-series" name="series" class="form-control" placeholder="Inserisci serie" value="{{ old('series') ?? $comic->series }}">
							@error('series')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-price" class="control-label">Prezzo</label>              {{--se old('price') risulta vera, viene mostrata --}}
							<input type="number" id="input-price" name="price" class="form-control" placeholder="Inserisci prezzo" value="{{ old('price') ?? $comic->price }}">
							@error('price')
							<div class="alert alert-danger">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="input-image" class="control-label">Immagine</label>            {{--se old('thumb') risulta vera, viene mostrata --}}
							<input type="text" id="input-image" name="thumb" class="form-control" placeholder="Inserisci un link per l'immagine" value="{{ old('thumb') ?? $comic->thumb }}">
						</div>
						<div class="form-group mb-3">
							<label for="input-date" class="control-label">Data</label>                  {{--se old('sale_date') risulta vera, viene mostrata --}}
							<input type="date" id="input-date" name="sale_date" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}">
						</div>
						<div class="form-group mb-3">
							<label for="input-description" class="control-label">Descrizione</label>    {{--se old('description') risulta vera, viene mostrata --}}
							<textarea id="input-description" name="description" class="form-control" placeholder="Inserisci una descrizione" rows="10" value="{{ old('description') ?? $comic->description }}"></textarea>
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