<?php

use Carbon\Carbon;
class GaleriaController extends BaseController {
	
	const URL_GALERIA = "/imagens/galeria/";

	public function showGaleria() {
		$this->apagarArquivos();
		$listInfo = Galeria::get();
		$path = self::URL_GALERIA;
		
		foreach ($listInfo as $key => $value) {
			$value->imagens = $value->listImagens($value->id_galeria);
			foreach ($value->imagens as $chave => $valor) {
				$data = explode(',', $valor->imagem);
				$extension = explode('/', $data[0]);
				$extension = explode(';', $extension[1]);
				$name = str_random(10).".".$extension[0];
				$this->base64_to_jpeg($data[1], $name);
				$valor->imagem = $path.$name;
			}
		}
		
		return View::make('galeria', compact('listInfo'));
	}
	
	/*public function showImagens($id) {
			
		
		$path = self::URL_GALERIA;
		
		$info = new Galeria;
		$listInfo = $info->listImagens($id);
		foreach ($listInfo as $key => $value) {
			$d1 = strtotime(date( 'Y-m-d'));
			$data = $value->created_at;
			$dataFormatada = Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('Y-m-d');
			$d2 = strtotime($dataFormatada);
			$d3 = round(($d1 - $d2) / 86400);
			$listInfo[$key]->dias = $d3;
			
			$data = explode(',', $value->imagem);
			$extension = explode('/', $data[0]);
			$extension = explode(';', $extension[1]);
			$name = str_random(10).".".$extension[0];
			$this->base64_to_jpeg($data[1], $name);
			$value->imagem = $path.$name;
		}
		return View::make('imagens', compact('listInfo'));
	}*/
	
	function base64_to_jpeg($base64_string, $name) {
		
		$img = imagecreatefromstring(base64_decode($base64_string)); 
		if($img != false) {
			
			$caminhoDefault = public_path();
			$path = self::URL_GALERIA;
			
		   	imagejpeg($img, $caminhoDefault.$path.$name); 
		} 
	}
	
	function apagarArquivos() {
		$caminhoDefault = public_path();
		$path = self::URL_GALERIA;
		$pasta = $caminhoDefault.$path;
		
		$path = $pasta."*";
		array_map( "unlink", glob( $path ) ); 
	}
}
