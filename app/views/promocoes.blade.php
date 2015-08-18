@extends('layout.layout')
@section('content')
<div class="row_3">
    <div class="container">
    	<h1 style="text-align: center">Promoções</h1>
        <div class="row_3">
            <ul class="list3">
            	@if (count($promocoes) > 0)
					@foreach ($promocoes as $key => $valor)
	                    <li class="col-lg-6 col-md-6 col-sm-6">
	                        <div class="box4">
	                            <figure><img src="{{ $valor->imagem }}" alt="" style="width: 188px; height: 207px"></figure>
	                            <div class="info1 maxheight">
	                                <p class="list3title1">{{ $valor->descricao }}</p>
	                                <div class="EstNomeProdCase">{{ $valor->texto }}</div>
	                                <a href="{{ URL::route('vejaMais', $valor->id) }}" class="btn-link btn-link1">Leia mais<span></span></a>
	                            </div>
	                        </div>
	                    </li>
	        		@endforeach
				@else
					<div style="text-align: center">Nenhuma promoção cadastrada.</div>
				@endif
            </ul>
        </div>
    </div>
</div>
@stop
@section('custom_script')
	<script>
		$(document).ready(function() {
			var textLimiter = 100;

			$('.EstNomeProdCase').html(function(i, h) {
				return h.length >= textLimiter ? h.slice(0, textLimiter) + ' <span title="' + h + '">...</span>' : h;
			});
		});
	</script>
@stop