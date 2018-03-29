<?php

	function gerarCertificado($datas = array())
	{
		header("Content-Type: image/jpg");
		
		$imagem = imagecreatefromjpeg("img/certificado.jpg");

		$corTitulo = imagecolorallocate($imagem, 0, 0, 0);
		$cinza = imagecolorallocate($imagem, 100, 100, 100);

		$fonteTitulo = __dir__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Cocogoose Pro-trial.ttf";
		$fonteTexto = __dir__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Cocogoose Pro Semilight-trial.ttf";

		$textoCertificado = "Gostariamos de conferir este certificado pela sua participação em nosso evento";

		imagettftext($imagem, 38, 0, 470, 180, $corTitulo, $fonteTitulo, "CERTIFICADO");
		imagettftext($imagem, 23, 0, 400, 330, $cinza, $fonteTexto, $datas['nome']);
		imagettftext($imagem, 15, 0, 200, 400, $cinza, $fonteTexto, $textoCertificado);
		imagettftext($imagem, 12, 0, 120, 730, $cinza, $fonteTexto, "Livro: ".$datas['livro']);
		imagettftext($imagem, 12, 0, 120, 750, $cinza, $fonteTexto, "Folha: ".$datas['folha']);
		imagettftext($imagem, 12, 0, 120, 770, $cinza, $fonteTexto, "Registro: ".$datas['registro']);
		imagettftext($imagem, 12, 0, 120, 790, $cinza, $fonteTexto, "Evento: ".$datas['evento']);
		imagettftext($imagem, 12, 0, 120, 810, $cinza, $fonteTexto, "Arquivo: ".$datas['arquivo']);

		imagejpeg($imagem);
	}

	gerarCertificado([
						'nome' => 'Vitor Hugo Balon de Oliveira', 
						'livro' => 'Informação Livro', 
						'folha' => 'Informação Livro', 
						'registro' => 'Informação Registro',
						'evento' => 'Informação Evento',
						'arquivo' => 'Informação Arquivo'
					]);
