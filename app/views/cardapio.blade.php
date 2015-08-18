@extends('layout.layout')
@section('content')
			<div class="row_3">
				<div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px">
					<iframe height="1000" src="{{ URL::route('tipoCardapio') }}" frameborder="0" allowfullscreen></iframe>
				</div>				
			</div>
@stop
@section('custom_script')
    <script>
    
		$(document).ready(function(){
	      var w = $(".col-lg-12").width(); 
	      $("iframe").width(w);
       });
		
	</script>
@stop