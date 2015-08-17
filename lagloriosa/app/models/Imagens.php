<?php

class Imagens extends Eloquent {
	protected $table = "imagens";
	protected $primaryKey = "id_imagem";
	
	public function galeria() {
        return $this->hasMany('Galeria', 'id_galeria');
    }
}