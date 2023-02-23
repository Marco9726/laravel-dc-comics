<header>
	<div id="top-bar" class="bg-my-primary">
		<div class="container-w60 text-end text-white">
			<small> DC POWER VISA &#174;</small>
			<small class="ms-5"> ADDITIONAL DC SITES &#x25BE;</small>
		</div>
	</div>
	<div id="main-header">
		<div class="container-w60">
			<div class="row align-items-center">
				<div class="col-1" id="logo">
					{{-- logo --}}
					<a href="/">
						<img src="{{Vite::asset('public/images/dc-logo.png')}}" alt="dc-logo">
					</a>
				</div>
				<nav class="col-9">
					<ul class="d-flex justify-content-between mb-0 gap-4">
						{{-- foreach per ciclare gli elementi dell'array associativo 'headerMenu' --}}
						@foreach ($headerMenu as $key => $item)
						<li class="{{ Route::currentRouteName() == $key ? 'active' : '' }}"> 
							{{-- valore dell'href = al path definito nell'array in web.php  --}}
							<a href="{{ route('nav_item', $item)}}" class="font-pt">{{ Str::upper($key)}}</a>
						 </li>
						@endforeach
					</ul>
				</nav>
				<div class="col-2 p-0 d-flex justify-content-end">
					<div id="searchbar" class="w-75">
						<input type="search" placeholder="Search" class="font-pt">
						<i class="fa-solid fa-magnifying-glass"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>