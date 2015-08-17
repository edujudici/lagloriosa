<?php

class ContatoController extends BaseController {

	public function showContato() {
		$info = InformacoesEmpresa::first();
		$telefones = explode(";", $info->telefones);
		$info->telefoneUm = $telefones[0];
		$info->telefoneDois = $telefones[1];
		$info->telefoneTres = $telefones[2];
		return View::make('contato', compact('info'));
	}
	
	public function contatoValidate() {
		$regras = [
			'nome' => 'required',
        	'email' => 'required|email',
        	'telefone' => 'required',
        	'mensagem' => 'required'
        ];
		
		$mensagens = [
			'nome.required' => 'O campo nome é obrigatório',
			'email.required' => 'O campo email é obrigatório',
			'email.email' => 'Email inválido',
			'telefone.required' => 'O campo telefone é obrigatório',
			'mensagem.required' => 'O campo mensagem é obrigatório'
			
		];
		
        $validacao = Validator::make(Input::all(), $regras, $mensagens);
         
        if ($validacao->fails()) {
            return Redirect::route('contato')->withErrors($validacao);
        } else {
        	
			$info = new Contato;
			$info->nome = Input::get('nome');
	    	$info->email = Input::get('email');
			$info->telefone = Input::get('telefone');
			$info->mensagem = Input::get('mensagem');
	     	$info->save();		
			
			// enviando email
			$input = Input::all();  
	    	Mail::send('corpoEmail', $input, function($message) {  
	      		$message->to('lagloriosapizzaria@gmail.com')->cc('edujudici@gmail.com')->replyTo(Input::get('email'))->subject('Contato do site');  
	    	}); 
			
            Session::flash('sucesso', 'Email enviado com sucesso');
			return $this->showContato();
        }
	}
}
