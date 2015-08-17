<?php

class PromocoesController extends BaseController {

	public function showPromocoes() {
		$promocoes = InformacoesHome::all();
		return View::make('promocoes', compact('promocoes'));
	}
}
