<?php

class TipoPizza extends Eloquent {
	protected $table = "tipo_pizza";
	protected $primaryKey = "id_tipo";
	
	public function pizzas() {
        return $this->hasMany('Pizza', 'id_tipo');
    }
	
	public function listPizzas($id) {
		return TipoPizza::join('pizza', 'pizza.id_tipo', '=', 'tipo_pizza.id_tipo')
		->where('pizza.id_tipo', $id)
		->orderby('pizza.numero')
		->get();
	}
	
	public function listPizzasFiltroNome($id, $filtroNome) {
		return TipoPizza::join('pizza', 'pizza.id_tipo', '=', 'tipo_pizza.id_tipo')
		->where('pizza.id_tipo', $id)
		->where('pizza.nome', 'like', '%' . $filtroNome . '%')
		->orderby('pizza.numero')
		->get();
	}
}