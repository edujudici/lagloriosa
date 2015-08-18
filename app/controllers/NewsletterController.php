<?php

class NewsletterController extends BaseController {
	
	public function cadastrar() {		
		
		$regras = [
        	'email' => 'required|email|unique:emails_cliente,email',
        ];
		
		$mensagens = [
			'email.required' => 'O campo email é obrigatório',
			'email.email' => 'Email inválido',
			'email.unique' => 'Email já cadastrado'
		];
		
		$dados['email'] = Input::get('email');
		
        $validacao = Validator::make($dados, $regras, $mensagens);
         
        if ($validacao->fails()) {
            return $validacao->messages()->toJson();
        } else {
        	
			$info = new Newsletter;
			$info->nome = Input::get('nome');
	    	$info->email = Input::get('email');
	     	$info->save();
            return "sucesso";
        }
	}	
}
