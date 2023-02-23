<footer>
	{{-- MAIN-FOOTER  --}}
	<section id="main-footer" class="py-4">
		<div class="container-w60 h-100">
			<div class="row justify-content-between h-100">
				<div class="col-6 h-100">

					<div id="lists" class="d-flex flex-column flex-wrap pt-2">
						{{-- foreach per ciclare le 4 liste dell'array associativo 'footerLists' --}}
						@foreach ($footerLists as $key => $item)
							<h5 class="font-pt mb-2 w-25">{{ $key }}</h5>
							<ul class="p-0 w-25">
								{{-- foreach per ciclare i vari elementi delle 4 liste  --}}
								@foreach ($item as $li)
								<li>
									<small>{{$li}}</small>
								</li>
								@endforeach
							</ul>
						@endforeach
					</div>
					<div>
						<small>All Site Cantent TM and &#169; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved
						<a href="#">Cookies Settings</a></small>
					</div>
				</div>

				<div class="col-5">
					<img src="{{Vite::asset('public/images/dc-logo-bg.png')}}" alt="dc-logo">
				</div>
			</div>
		</div>
	</section>
	{{-- LAST SECTION  --}}
	<section id="last-section" class="py-4">
		<div class="container-w60">
			<div class="row justify-content-between">
				<div id="button" class="col-2">
					<button class="px-3 py-2">SING UP NOW!</button>
				</div>
				<div id="social" class="col-4 d-flex align-items-center justify-content-end p-0">
					<h5 class="m-0">FOLLOW US</h5>
					<ul class="d-flex m-0 gap-3">
						{{-- foreach per ciclare le icone social  --}}
						@foreach ($socialArray as $key => $social)
						<li>
							<a href="{{ $key }}.com">
								<img src="{{Vite::asset( $social) }}" alt="{{ $key}}-logo">
							
							</a>
						</li>
						@endforeach

					</ul>
				</div>
			</div>
		</div>
	</section>
</footer>