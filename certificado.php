<?php

	session_start();
	header("Content-Type: image/jpg");
					
	$imagem = imagecreatefromjpeg("res/img/certificado.jpg");

	$corTitulo = imagecolorallocate($imagem, 0, 0, 0);
	$cinza = imagecolorallocate($imagem, 100, 100, 100);

	$fonteTitulo = $_SESSION['fonteTitulo'];
	$fonteTexto = $_SESSION['fonteTexto'];
	$fonteNumero = $_SESSION['fonteNumero'];

	$textoCertificado = "Gostariamos de conferir este certificado pela sua participação em nosso evento";

	$x = 0;

	if ((strlen($_SESSION['nome'])) >= 27) {
		$x = 400;
	} elseif ((strlen($_SESSION['nome'])) >= 22) {
		$x = 450;
	} elseif ((strlen($_SESSION['nome'])) >= 18) {
		$x = 482;
	} elseif ((strlen($_SESSION['nome'])) >= 16) {
		$x = 498;
	}  elseif ((strlen($_SESSION['nome'])) >= 14) {
		$x = 520;
	} elseif ((strlen($_SESSION['nome'])) >= 10) {
		$x = 550;
	}

	imagettftext($imagem, 38, 0, 470, 180, $corTitulo, $fonteTitulo, "CERTIFICADO");
	imagettftext($imagem, 23, 0, $x, 330, $cinza, $fonteTexto, $_SESSION['nome']);
	imagettftext($imagem, 15, 0, 200, 400, $cinza, $fonteTexto, $textoCertificado);
	imagettftext($imagem, 15, 0, 120, 730, $cinza, $fonteNumero, "Livro: ".$_SESSION['livro']);
	imagettftext($imagem, 15, 0, 120, 750, $cinza, $fonteNumero, "Folha: ".$_SESSION['folha']);
	imagettftext($imagem, 15, 0, 120, 770, $cinza, $fonteNumero, "Registro: ".$_SESSION['registro']);
	imagettftext($imagem, 15, 0, 120, 790, $cinza, $fonteNumero, "Evento: ".$_SESSION['evento']);

	imagejpeg($imagem);