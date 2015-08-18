@extends('layout.layout')
@section('content')

<div class="row_3">
	<div class="container">
		<h1 style="text-align: center">{{ $info->descricao }}</h1>
		<div class="row_3">
			<div class="col-lg-1 col-md-1 col-sm-1"></div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<figure>
					<img src="{{ $info->imagem }}" alt="" class="img-radius">
				</figure>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7">
				{{ $info->texto }}

			</div>
		</div>

	</div>
	<div class="row_3" align="center">
		<a href="{{ URL::route('home') }}">Voltar</a>
	</div>
</div>
@stop