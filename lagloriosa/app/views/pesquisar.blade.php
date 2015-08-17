@extends('layout.layout')
@section('content')
<section id="content">
	<div class="sub-content">
		<div class="container">
			<div class="row">
				<div class="span12" style="margin-top: 20px">
					<iframe height="1000" src="{{ URL::route('tipoCardapioFiltrado', $valorBuscar) }}" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
@section('custom_script')
    <script>
    
		$(document).ready(function(){
	      var w = $(".span12").width(); 
	      $("iframe").width(w);
       });
		
	</script>
@stop