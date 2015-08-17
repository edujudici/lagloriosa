<?php

class EmpresaController extends BaseController {

	public function showEmpresa() {
		$info = InformacoesEmpresa::first();
		return View::make('empresa')->with(['nome' => $info->nome, 'historico' => $info->historico]);
	}
}
