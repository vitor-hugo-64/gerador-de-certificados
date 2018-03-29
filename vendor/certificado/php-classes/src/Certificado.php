<?php

	namespace Certificado;

	class Certificado
	{
		
		public function montar( $fonteTitulo, $fonteTexto, $fonteNumero, $nome, $livro, $folha, $registro, $evento)
		{
			header("Content-Type: image/jpg");
					
			$imagem = imagecreatefromjpeg("res/img/certificado.jpg");

			$corTitulo = imagecolorallocate($imagem, 0, 0, 0);
			$cinza = imagecolorallocate($imagem, 100, 100, 100);

			$fonteTitulo = $fonteTitulo;
			$fonteTexto = $fonteTexto;
			$fonteNumero = $fonteNumero;

			$textoCertificado = "Gostariamos de conferir este certificado pela sua participação em nosso evento";

			imagettftext($imagem, 38, 0, 470, 180, $corTitulo, $fonteTitulo, "CERTIFICADO");
			imagettftext($imagem, 23, 0, 400, 330, $cinza, $fonteTexto, $nome);
			imagettftext($imagem, 15, 0, 200, 400, $cinza, $fonteTexto, $textoCertificado);
			imagettftext($imagem, 15, 0, 120, 730, $cinza, $fonteNumero, "Livro: ".$livro);
			imagettftext($imagem, 15, 0, 120, 750, $cinza, $fonteNumero, "Folha: ".$folha);
			imagettftext($imagem, 15, 0, 120, 770, $cinza, $fonteNumero, "Registro: ".$registro);
			imagettftext($imagem, 15, 0, 120, 790, $cinza, $fonteNumero, "Evento: ".$evento);

			imagejpeg($imagem);
		}
	}