<?php

class Galeria extends Eloquent {
	protected $table = "galeria";
	protected $primaryKey = "id_galeria";
	
	public function imagens() {
        return $this->hasMany('Imagens', 'id_galeria');
    }
	
	public function listImagens($id) {
		return Galeria::join('imagens', 'imagens.id_galeria', '=', 'galeria.id_galeria')
		->where('imagens.id_galeria', $id)
		->orderBy('imagens.posicao', 'asc')
		->get();
	}
}