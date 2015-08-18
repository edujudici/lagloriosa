@extends('layout.layout')

@section('custom_script_head')
	{{ HTML::style('galeria/css/gallery.css') }}
	{{ HTML::style('galeria/css/lightbox.css') }}
@stop

@section('content')
<section id="content">
	<div class="sub-content">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h4>IMAGENS DO ALBÚM</h4>
					@foreach($listInfo as $key => $value)
			        	<div class="box-detail">
			                <div class="box-inner box-color">
			                	
			                	<a href="{{ $value->imagem }}" data-lightbox="example-set" data-title="">
			                		<img src="{{ $value->imagem }}" alt="" />
			                		<div class="box-inner-fx" style="display: none;">
			                            <h2>{{ $value->info_um }}</h2>
			                            <span>Ampliar</span>
			                        </div>
			                	</a>
			                </div>
			                <div class="box-bottom">
			                	@if($value->info_dois != "")
			                		<div class="box-bottom-left">{{ $value->info_dois }}</div>
			                	@endif
	                            <div class="box-bottom-right">{{ $value->dias }} dia(s) atrás</div>
	                        </div>		
			            </div>
		        	@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('custom_script')
	{{ HTML::script('galeria/js/jquery-1.11.0.min.js') }}
	{{ HTML::script('galeria/js/lightbox.js') }}
    <script>
    
		$(document).ready(function(){
	        $('.box-alb').find('.box-inner-fx').css('background','url()').fadeIn(1000);
	                
	        $('.box-inner').hover(
	        function(){
	            $(this).find('.box-inner-fx').slideDown();
	        },
	        function(){
	            $(this).find('.box-inner-fx').slideUp();
	        })	
	        window.onload = function() {
	            
            	$(".rel").fancybox({
	                openEffect : 'elastic',
	                openSpeed  : 150,
	                closeEffect : 'elastic',
	                closeSpeed  : 350, 
	                arrows: true,
	                helpers : {
	                    title : {
	                        type : 'float'//float, over, outside,inside
	                    }
	                }                
                });
            }
        })
		
	</script>
@stop