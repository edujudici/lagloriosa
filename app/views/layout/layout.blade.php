<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
	    <title>La Gloriosa</title>
	    <meta charset="utf-8">    
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="icon" href="{{ URL::to('img/favicon.ico') }}" type="image/x-icon">
	    <link rel="shortcut icon" href="{{ URL::to('img/favicon.ico') }}" type="image/x-icon" />
	    <meta name = "format-detection" content = "telephone=no" />
	    <meta name="description" content="Pizzas e Esfihas saborosas em Rio Claro">
	    <meta name="keywords" content="pizzaria, pizza, pizzas, cardápio, estabelecimento, refeição, restaurante, la, gloriosa, la gloriosa, La Gloriosa, Rio Claro, Pizzaria em Rio Claro, Comida, Bebida">
	    <meta name="author" content="Eduardo Judici">
	    
	    {{ HTML::style('css/bootstrap.css') }}
	    {{ HTML::style('css/style.css') }}
	    {{ HTML::style('css/camera.css') }}
	    
	    {{ HTML::script('js/jquery.js') }}
	    {{ HTML::script('js/jquery-migrate-1.2.1.js') }}
	    {{ HTML::script('js/superfish.js') }}
	    {{ HTML::script('js/jquery.mobilemenu.js') }}
	    {{ HTML::script('js/jquery.easing.1.3.js') }}
	    {{ HTML::script('js/jquery.ui.totop.js') }}
	    {{ HTML::script('js/jquery.touchSwipe.min.js') }}
	    {{ HTML::script('js/jquery.equalheights.js') }}
	    {{ HTML::script('js/camera.js') }}
	    
	    <!--[if (gt IE 9)|!(IE)]><!-->
	    	{{ HTML::script('js/jquery.mobile.customized.min.js') }}
	    <!--<![endif]-->
	    
	    <!--[if lt IE 9]>
	    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" style="color: #fff"><img src="{{ URL::to('img/warning.png') }}" border="0" height="42" alt="Você está usando um navegador desatualizado. Para visualizar nosso site corretamente, atualizar gratuitamente clicando aqui." />Você está usando um navegador desatualizado. Para visualizar nosso site corretamente, atualizar gratuitamente clicando aqui.</a></div>  
	  <![endif]-->
	@show
  	
  	@section('custom_script_head')
    @show
</head>

<body>
<!--==============================header=================================-->
<header id="header">
      <div class="container">
        <!--<h1 class="navbar-brand navbar-brand_"><a href="{{ URL::route('home') }}"><img alt="Grill point" src="{{ $info->logotipo }}"></a></h1>-->
        <h1 class="navbar-brand navbar-brand_"><a href="{{ URL::route('home') }}"><img alt="Grill point" src="{{ URL::to('img/logo.png') }}"></a></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li><a href="{{ URL::route('home') }}">Home</a></li>
                  <li><a href="{{ URL::route('empresa') }}">A Empresa</a></li>
                  <li><a href="{{ URL::route('galeria') }}">Galeria</a></li>
                  <li><a href="{{ URL::route('cardapio') }}">Cardápio</a></li>
                  <li><a href="{{ URL::route('promocoes') }}">Destaques</a></li>
              	  <li><a href="{{ URL::route('contato') }}">Contato</a></li>
                </ul>
            </nav>
          </div>
      </div>
</header>
<!--==============================content=================================-->
<div id="content">

	@section('slider')
    @show
    
    @yield('content')
    
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
            	{{ Form::open(array('route' => 'pesquisar', 'class' => 'contact-form', 'id' => 'search-form', 'method' => 'GET')) }}
            		<div class="col-lg-8 col-md-8 col-sm-8" style="padding: 0px">
						<input type="text" onFocus="if(this.value =='Digite sua pesquisa aqui' ) this.value=''" onBlur="if(this.value=='') this.value='Digite sua pesquisa aqui'" value="Digite sua pesquisa aqui" name="pesquisar" style="color: white; border: 1px solid #fff"><br /><br />
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<button type="submit" class="btn btn_ btn-small_">Pesquisar</button>
					</div>
				{{ Form::close() }}
				<br /><br />
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="{{ URL::to('img/follow_icon1.png') }}" alt=""></a></li>
                     <li><a href="#"><img src="{{ URL::to('img/follow_icon2.png') }}" alt=""></a></li>
                     <li><a href="#"><img src="{{ URL::to('img/follow_icon3.png') }}" alt=""></a></li>
                     <li><a href="#"><img src="{{ URL::to('img/follow_icon4.png') }}" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footerlogo footercol">
                <a class="smalllogo2 logo" href="{{ URL::route('home') }}"><img src="{{ URL::to('img/logo_footer.png') }}" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footercol">
            	<form id="newsletter" method="post" class="contact-form">
					<span style="color: #fff">Cadastre seu e-mail abaixo e receba nossas novidades.</span>					
					<div class="clearfix">
						<input type="text" onFocus="if(this.value =='Digite seu nome aqui' ) this.value=''" onBlur="if(this.value=='') this.value='Digite seu nome aqui'" value="Digite seu nome aqui" name="nome" style="color: white; border: 1px solid #fff"><br /><br />
						<input type="text" onFocus="if(this.value =='Digite seu e-mail aqui' ) this.value=''" onBlur="if(this.value=='') this.value='Digite seu e-mail aqui'" value="Digite seu e-mail aqui" name="email" style="color: white; border: 1px solid #fff">
						<div style="padding: 50px  0 10px 0">
							<button id="cadastrarNewsletter" type="submit" class="btn btn_ btn-small_">
								Cadastrar
							</button>
							<br /><br />
							<span id="statusNewsletter" style="color: #fff"></span>
						</div>							
					</div>
				</form>
                <p class="footerpriv">&copy; 2015 &bull; <a class="privacylink" href="{{ URL::route('politica') }}">Política de Privacidade</a><!-- {%FOOTER_LINK} -->
				<br> Desenvolvido por: Eduardo Judici | Contato: edujudici@gmail.com
				</p>
            </div>
        </div>
    </div>
</footer>
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/tm-scripts.js') }}

<script>

	//realiza chamada ajax
	function doAjax(object) {
	
		var retorno = null;
		$.ajax({
			type : object.type,
			url : object.url,
			async : object.async,
			timeout : object.timeout,
			data : object.data,
			contentType : object.contentType,
			dataType : object.dataType,
			success : function(data) {
				retorno = data;
			},
			error: function(data, errorThrown) {
	        	retorno = "erro";
	      	}
		});
		return retorno;
	}
	
	$(document).ready( function() {
		$("#cadastrarNewsletter").click(function (e) { 
			
			var dados = $('#cadUsuario').serialize();
			var email = $("input[name=email]").val();
			var nome  = $("input[name=nome]").val();
			
			e.preventDefault();
			
			if (email == "Digite seu e-mail aqui" || nome == "Digite seu nome aqui") {
				email = "";
				nome = "";
			}
			
			var object = {
				"type" : "POST",
				"url" : "{{ URL::route('cadNewsletter') }}",
				"async" : false,
				"data" : {email: email, nome: nome}
			};
			var arrResult = doAjax(object); 
			
			if (arrResult == 'sucesso') {
				$("input[name=email]").val("Digite seu e-mail aqui");
				$("input[name=nome]").val("Digite seu nome aqui");
				$("#statusNewsletter").text("E-mail cadastrado com sucesso");
			} else if (arrResult == 'erro') {
				$("#statusNewsletter").text("Ops! Ocorreu um problema. Tente novamente.");
			} else {
				var retorno = $.parseJSON(arrResult);
				$("#statusNewsletter").text(retorno.email);
			}
		});
		
		$("#search-form").submit(function() {
			if ($("input[name=pesquisar]").val() == "Digite sua pesquisa aqui")
				$("input[name=pesquisar]").val("vazio");
		});
	});
</script>

@section('custom_script')
@show
</body>
</html>