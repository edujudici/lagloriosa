<?php

class HomeController extends BaseController {
	
	const URL_BANNER = "/imagens/banner/";
	
	public function showWelcome() {
		
		$this->apagarArquivos();
		
		$listBanner = Banner::orderby('posicao')->get();
		
		$path = self::URL_BANNER;
		
		foreach ($listBanner as $key => $value) {
			
			$data = explode(',', $value->imagem);
			
			$extension = explode('/', $data[0]);
			$extension = explode(';', $extension[1]);
			
			$name = str_random(10).".".$extension[0];
			
			$this->base64_to_jpeg($data[1], $name);
			
			$value->imagem = $path.$name;
		}
		
		$listInfo = InformacoesHome::orderby('id', 'asc')->get();
		return View::make('index', compact('listBanner', 'listInfo'));
	}
	
	function base64_to_jpeg($base64_string, $name) {
		
		$img = imagecreatefromstring(base64_decode($base64_string)); 
		if($img != false) {
			
			$caminhoDefault = public_path();
			$path = self::URL_BANNER;
			
		   	imagejpeg($img, $caminhoDefault.$path.$name); 
		} 
	}
	
	function apagarArquivos() {
		$caminhoDefault = public_path();
		$path = self::URL_BANNER;
		$pasta = $caminhoDefault.$path;
		
		$path = $pasta."*";
		array_map( "unlink", glob( $path ) ); 
	}
}
