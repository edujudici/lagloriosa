@extends('layout.layout')
@section('content')
<div class="row_9">
    <div class="container">
        <div class="row privacy_page">
            <div class="col-lg-6 col-md-6 col-sm-6">
                {{ $blocoEsquerda }}
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-6">
                {{ $blocoDireita }}
            </div> 
         </div> 
    </div>
</div>
@stop