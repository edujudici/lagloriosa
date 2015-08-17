<?php

class CardapioController extends BaseController {

	public function showCardapio() {
		return View::make('cardapio');
	}
	
	public function showTipoCardapio() {
		$listTipoPizza = TipoPizza::get();
		return View::make('tipoCardapio', compact('listTipoPizza'));
	}
}
