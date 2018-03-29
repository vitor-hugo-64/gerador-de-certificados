<?php

	require_once("vendor".DIRECTORY_SEPARATOR."autoload.php");
	session_start();
	use \Slim\Slim;
	use \Certificado\Page;
	use \Certificado\Model\User;

	$app = new Slim();

	$app->get( '/', function ()
	{
		$_SESSION = null;
		$page = new Page();
		$page->drawPage( [ 'header', 'login', 'footer'] );
	});

	$app->post( '/logar', function ()
	{
		$user = new User();
		$result = $user->login($_POST['email']);
		header('Location: /lista-certificados');
		exit;
	});

	$app->get( '/lista-certificados', function ()
	{
		User::verifyLogin();
		$page = new Page();
		$datas = $_SESSION['datas'];
		$page->drawPage( [ 'header', 'lista-certificados', 'footer'], ['datas' => $datas] );
	});

	$app->get( '/certificado/:livro/:folha/:registro/:nome/:evento', function ($livro, $folha, $registro, $nome, $evento)
	{
		User::verifyLogin();
		$_SESSION['livro'] = $livro;
		$_SESSION['folha'] = $folha;
		$_SESSION['registro'] = $registro;
		$_SESSION['nome'] = $nome;
		$_SESSION['evento'] = $evento;
		$_SESSION['fonteTitulo'] = __dir__.DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Cocogoose Pro-trial.ttf";
		$_SESSION['fonteTexto'] = __dir__.DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Cocogoose Pro Semilight-trial.ttf";
		$_SESSION['fonteNumero'] = __dir__.DIRECTORY_SEPARATOR."res".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."CaviarDreams_Bold.ttf";
		header('Location: /certificado.php');
		exit;
	});



	$app->run();