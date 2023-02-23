{{-- estendo la pagina con il layout base (header,jumbo e footer)  --}}
@extends('layouts.app')

{{-- valorizzo lo yield 'content' con il seguente contenuto --}}
@section('content')
<div id="blue-bg" class="bg-my-primary">
	<div class="container w-50">
		<div class="poster">
			<img src="{{ $comic['thumb']}}" alt="comic-poster" class="h-100">
			<small class="label-top px-1">COMIC BOOK</small>
			<small class="label-bottom">VIEW GALLERY</small>
		</div>
	</div>
</div>
{{-- PRIMA SECTION --}}
<section id="comic-info" class="py-5">
	<div class="container w-50">
		<div class="row justify-content-between">
			{{-- col-left --}}
			<div class="col-left p-0">
				{{-- title --}}
				<h3 class="mb-3">{{ Str::upper( $comic['title']) }}</h3>
				{{-- info --}}
				<div id="shop-info" class="d-flex mb-2">
					<div class="col col-8 px-4 py-2 d-flex ">
						<span class="lightgreen">U.S. Price: </span> <span> {{ $comic['price'] }}</span>
						<span class="lightgreen ms-auto">AVAILABLE</span>
					</div>
					<div class="col col-4 px-4 py-2 text-center">
						Check Availability &#x25BE;
					</div>
				</div>
				<p>
					{{ $comic['description'] }}
				</p>
			</div>
			{{-- col-right --}}
			<div class="col-right p-0">
				<img src="{{Vite::asset('public/images/adv.jpg')}}" alt="ADV" class="img-fluid">
				<h6 class="m-0">ADVERTISIMENT</h6>
			</div>
		</div>
	</div>
</section>
{{-- SECONDA SECTION --}}
<section id="comic-details" class="pt-3">
	<div class="container w-50">
		<div class="row justify-content-between">
			{{-- LEFT --}}
			<div class="col-left">
				<h6>Talent</h6>
				<div class="details">
					<div class="row m-0">
						<div class="col-4">Art by:</div>
						<div class="col-8">
							<a href="#" class="lightblue">{{ $comic['artists'] }}</a>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-4">Written by:</div>
						<div class="col-8">
							<a href="#" class="lightblue">{{ $comic['writers'] }}</a>
						</div>
					</div>
				</div>
			</div>
			{{-- RIGHT --}}
			<div class="col-right">
				<h6>Specs</h6>
				<div class="details">
					<div class="row m-0">
						<div class="col-4">Series:</div>
						<div class="col-8 lightblue">{{ Str::upper($comic['series']) }}</div>
					</div>
					<div class="row m-0">
						<div class="col-4">U.S. Price:</div>
						<div class="col-8">{{ $comic['price'] }}</div>
					</div>
					<div class="row m-0">
						<div class="col-4">On Sale Date:</div>
						{{-- richiamo funzione per cambiare il formato della data --}}
						{{-- <div class="col-8">{{ changeDate($comic) }}</div> --}}
						<div class="col-8">{{ $comic['sale_date'] }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- NAVBAR --}}
<section id="navbar">
	<div class="container w-50">
		<div class="row">
			<div class="col-3">
				<h6>DIGITAL COMICS</h6>
			</div>
			<div class="col-3">
				<h6>SHOP DC</h6>
			</div>
			<div class="col-3">
				<h6>COMIC SHOP LOCATOR</h6>
			</div>
			<div class="col-3">
				<h6>SUBSCRIPTIONS</h6>
			</div>
		</div>
	</div>
</section>
@endsection