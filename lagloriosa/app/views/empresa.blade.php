@extends('layout.layout')
@section('content')
<div class="row_3">
	<div class="container">
		<div class="row privacy_page">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1 align="center">{{ $nome }}</h1>
			</div>
		</div>
		<div class="row privacy_page">
			<div class="col-lg-2 col-md-2 col-sm-2"></div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				{{ $historico }}
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2"></div>
		</div>
	</div>
</div>

@stop