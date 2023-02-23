{{-- estendo la pagina con il layout base (header,jumbo e footer)  --}}
@extends('layouts.app')

{{-- valorizzo lo yield 'content' con il seguente contenuto --}}
@section('content')
	<div class="container-w60">
		<H1>PAGINA {{ $li }}</H1>
	</div>
@endsection