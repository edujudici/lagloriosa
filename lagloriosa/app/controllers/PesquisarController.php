<?php

class PesquisarController extends BaseController {

	public function showPesquisar() {
		$valorBuscar = Input::get('pesquisar');
		return View::make('pesquisar', compact('valorBuscar'));
	}

	function showTipoCardapio($valorBuscar) {
		
		$listTipoPizza = TipoPizza::get();
		
		$arrPizzas = [];
		foreach ($listTipoPizza as $key => $value) {
			
			if (count($value->listPizzasFiltroNome($value->id_tipo, $valorBuscar)) < 1) {
				unset($listTipoPizza[$key]);
			}
			
			foreach ($value->listPizzasFiltroNome($value->id_tipo, $valorBuscar) as $chave => $valor) {
				
				$listTipoPizza->arrPizzas[$key] = $value->listPizzasFiltroNome($value->id_tipo, $valorBuscar);
				$arrPizzas[] = $listTipoPizza->arrPizzas[$key][$chave];
			}
		}
		
		$listTipoPizza->arrPizzas = $arrPizzas;
		
		return View::make('tipoCardapioPesquisa', compact('listTipoPizza'));
	}
}
