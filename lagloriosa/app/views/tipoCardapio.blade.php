<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Cardápio</title>
		<meta name="description" content="A melhor pizzaria de Rio Claro" />
		<meta name="keywords" content="menu, cardápio, pizzas, pizzaria" />
		{{ HTML::style('cardapio/css/jquery.jscrollpane.custom.css') }}
		{{ HTML::style('cardapio/css/bookblock.css') }}
		{{ HTML::style('cardapio/css/custom.css') }}
	    {{ HTML::script('cardapio/js/modernizr.custom.79639.js') }}
	</head>
	<body>
		<div id="container" class="container">	
			@if (count($listTipoPizza) > 0)
				<div class="menu-panel">
					<h3>Menu</h3>
					<ul id="menu-toc" class="menu-toc">
						@foreach ($listTipoPizza as $key => $value)
							@if ($key == 0)
								<li class="menu-toc-current"><a href="#item{{ $key }}">{{ $value->descricao }}</a></li>
							@else
								<li><a href="#item{{ $key }}">{{ $value->descricao }}</a></li>
							@endif
						@endforeach
					</ul>				
				</div>
	
				<div class="bb-custom-wrapper">
					<div id="bb-bookblock" class="bb-bookblock">
						@foreach ($listTipoPizza as $key => $value)
							<div class="bb-item" id="item{{ $key }}">
								<div class="content">
									<div class="scroller">
										<h2>{{ $value->descricao }}</h2>
										@foreach ($value->listPizzas($value->id_tipo) as $chave => $valor)
											<div>
												<strong style="margin-right: 10px; color: #FF0000">{{ $valor->numero }}</strong>
												<strong>{{ $valor->nome }}: </strong>
												<span>{{ $valor->descricao }}</span>
												<strong style="margin-left: 10px; color: #FF0000">{{ $valor->preco }}</strong>
											</div>
											<br><hr><br>
										@endforeach
									</div>
								</div>
							</div>
						@endforeach
					</div>
					
					<nav>
						<span id="bb-nav-prev">&larr;</span>
						<span id="bb-nav-next">&rarr;</span>
					</nav>
	
					<span id="tblcontents" class="menu-button">Table of Contents</span>
	
				</div>
			@else
				<span style="color: #fff">Não possui pizzas cadastradas</span>
			@endif
				
		</div><!-- /container -->
		{{ HTML::script('cardapio/js/ajax.jquery.min.js') }}
		{{ HTML::script('cardapio/js/jquery.mousewheel.js') }}
		{{ HTML::script('cardapio/js/jquery.jscrollpane.min.js') }}
		{{ HTML::script('cardapio/js/jquerypp.custom.js') }}
		{{ HTML::script('cardapio/js/jquery.bookblock.js') }}
		{{ HTML::script('cardapio/js/page.js') }}
	    <script>
			$(function() {
	
				Page.init();
	
			});
		</script>
	</body>
</html>
