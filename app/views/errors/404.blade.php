@extends('layout.layout')

@section('content')
<div class="row_10">
    <div class="container">
      <div class="row block-404">
        <div class="col-lg-7 col-md-7 col-sm-7">
            <figure class="img-polaroid"><img src="{{ URL::to('img/404.jpg') }}" alt=""></figure>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-5 forminfo">
            <div>
                <h2 class="title404_1">Ops!</h2>
                <h4>404 Página Não Encontrada</h4>
	            <p class="p3">Você procurou uma página inexistente em nosso site.</p>
	            Tente Novamente.
            </div>
        </div>  
      </div> 
    </div>
</div>
@stop
