@extends('layout.layout')
@section('content')
<div class="row_8">
	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 address">
				<h2>Formulário para Contato</h2>
				{{ Form::open(array('route' => 'contatoValidate', 'id' => 'contact-form', 'class' => 'contact-form')) }}
				@if(count($errors->all()) > 0)
					{{ HTML::ul($errors->all()) }}
				@endif

				@if (Session::has('sucesso'))
					<strong>{{ Session::get('sucesso') }}</strong>
				@endif

				<fieldset>
					<div class="coll-1">
						<div>
							Nome<span>:</span>
						</div>
						<label class="name">
							<input type="text" name="nome">
							<br>
					</div>
					<div class="coll-2">
						<div>
							Email<span>:</span>
						</div>
						<label class="email">
							<input type="email" name="email">
							<br>
					</div>
					<div class="coll-3">
						<div>
							Telefone:
						</div>
						<label class="phone notRequired">
							<input type="tel" name="telefone">
							<br>
					</div>
					<div class="clear"></div>
					<div>
						<div>
							Mensagem<span>:</span>
						</div>
						<label class="message"> 							<textarea name="mensagem"></textarea>
<br>					</div>
					<div class="clear"></div>
				</fieldset>
				<div class="buttons-wrapper clearfix">
					<button type="submit" class="btn btn_ btn-small_">
						Enviar
					</button>
				</div>
				{{ Form::close() }}
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 address">
				<h2>Dados Contato</h2>
				<address>
					<div class="info">
						<p>
							<span>Endereço:</span>{{ $info->endereco }}
						</p>
						<p>
							<span>E-mail:</span> {{ $info->email }}
						</p>
						<p>
							<span>Telefone 1:</span> {{ $info->telefoneUm }}
						</p>
						<p>
							<span>Telefone 2:</span> {{ $info->telefoneDois }}
						</p>
					</div>
				</address>
			</div>

		</div>
		
		<h2 style="margin-top: 20px">Nossa Localização</h2>

		<div class="row_3">
			<div class="col-lg-12 col-md-12 col-sm-12 gmap">
				<div class="map">
					{{ $info->frame }}
				</div>
			</div>
		</div>
	</div>
</div>
@stop