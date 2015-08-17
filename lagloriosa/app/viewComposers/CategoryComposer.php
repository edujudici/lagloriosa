<?php

class CategoryComposer {
	public function informacoesEmpresa($view) {
		$info = InformacoesEmpresa::first();
		
		if ($info == null) {
			$info = new stdClass;
			$info->telefones = [];
			$info->logotipo = "";
		} else {
			$telefones = $info->telefones;
			$telefones = explode(";", $telefones);
			$info->telefones = $telefones;
		}
		$view->with(compact('info'));
	}
}