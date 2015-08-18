<?php

class Pizza extends Eloquent {
	protected $table = "pizza";
	protected $primaryKey = "id_pizza";
	
	public function tipoPizza() {
        return $this->hasMany('TipoPizza', 'id_tipo');
    }
}