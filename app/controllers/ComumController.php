<?php

class ComumController extends BaseController {	

	public function showVejaMais($id) {
		$info = InformacoesHome::find($id);
		return View::make('vejaMais', compact('info'));
	}
}
