@extends('layout.layout')

@section('custom_script_head')
	<script>
      	$(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
	</script>
	
	<!-- Analytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-62658108-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
@stop

@if (count($listBanner) > 0)
	@section('slider')
	<div class="slider">
		<div class="camera_wrap">
			@foreach ($listBanner as $key => $valor)
				<div data-src="{{ URL::to($valor->imagem) }}"></div>
			@endforeach
		</div>
	</div>
	@stop
@endif
@section('content')
<!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">Destaques!</p>            
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_2">
        <div class="container">
            <div class="row">
                <ul class="list1">
                	@foreach ($listInfo as $key => $valor)
	                	@if($key < 3)
	                		@if(($key % 2) == 0)
		                		<li class="col-lg-4 col-md-4 col-sm-4 listbox{{$key+1}}">
			                        <div class="box{{$key+1}}">
			                            <a href="{{ URL::route('vejaMais', $valor->id) }}">
			                                <figure><img src="{{ $valor->imagem }}" alt=""></figure>
			                                <p>{{ $valor->descricao }}</p>
			                            </a>
			                        </div>
			                    </li> 
		                    @else
		                    	<li class="col-lg-4 col-md-4 col-sm-4 listbox{{$key+1}}">
			                        <div class="box{{$key+1}}">
			                            <a href="{{ URL::route('vejaMais', $valor->id) }}">
			                            	<p>{{ $valor->descricao }}</p>
			                                <figure><img src="{{ $valor->imagem }}" alt=""></figure>
			                            </a>
			                        </div>
			                    </li>
		                    @endif 
		                @endif                 
					@endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row_1">
        <div class="container">
            <a href="{{ URL::route('promocoes') }}" class="btn btn-default btn-lg btn1" style="margin-bottom: 10px">Mais</a>            
        </div>
    </div>
    
@stop

