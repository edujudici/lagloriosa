<?php

// view composers, as primeiras rotas a serem executadas
View::composer('layout.layout', 'CategoryComposer@informacoesEmpresa');

// rotas para navegação no site
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']); 
Route::get('/empresa', ['as' => 'empresa', 'uses' => 'EmpresaController@showEmpresa']);
Route::get('/itens-cardapio', ['as' => 'cardapio', 'uses' => 'CardapioController@showCardapio']);
Route::get('/tipo-cardapio', ['as' => 'tipoCardapio', 'uses' => 'CardapioController@showTipoCardapio']);
Route::get('/tipo-cardapio-filtrado/{valorBuscar}', ['as' => 'tipoCardapioFiltrado', 'uses' => 'PesquisarController@showTipoCardapio']);
Route::get('/galerias', ['as' => 'galeria', 'uses' => 'GaleriaController@showGaleria']);
Route::get('/imagens/{id}', ['as' => 'imagens', 'uses' => 'GaleriaController@showImagens']);
Route::get('/promocoes', ['as' => 'promocoes', 'uses' => 'PromocoesController@showPromocoes']);
Route::get('/contato', ['as' => 'contato', 'uses' => 'ContatoController@showContato']);
Route::post('/contato', ['as' => 'contatoValidate', 'uses' => 'ContatoController@contatoValidate']);
Route::get('/veja-mais/{id}', ['as' => 'vejaMais', 'uses' => 'ComumController@showVejaMais']);
Route::get('/pesquisar', ['as' => 'pesquisar', 'uses' => 'PesquisarController@showPesquisar']);
Route::get('/politica', ['as' => 'politica', 'uses' => 
	function() {
		$info = PoliticaPrivacidade::first();
		$blocoEsquerda = "";
		$blocoDireita = "";
		if ($info != null) {
			$blocoEsquerda = $info->bloco_esquerda;
			$blocoDireita = $info->bloco_direita;
		}
		return View::make('politica')->with(['blocoEsquerda' => $blocoEsquerda, 'blocoDireita' => $blocoDireita]);
	}
]);

// newsletter
Route::post('/cadastrar-newsletter', ['as' => 'cadNewsletter', 'uses' => 'NewsletterController@cadastrar']);