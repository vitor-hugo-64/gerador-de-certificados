<?php

	namespace Certificado\Model;

	use \Certificado\DB\Sql;

	class User
	{

		public function login($email)
		{
			$rowQuery = "SELECT * FROM eventos WHERE email = :EMAIL";
			$param = [':EMAIL' => $email];
			$sql = new Sql();
			$result = $sql->select( $rowQuery, $param);
			if (count($result) !== 0) {
				$_SESSION['login'] = $email;
				$_SESSION['datas'] = $result;
			} else {
				header('Location: /');
				exit;
			}
		}

		function logout()
		{
			$_SESSION = null;		
		}

		public function verifyLogin()
		{
			if ( !isset($_SESSION['login']) || !$_SESSION['login']) {
				header('Location: /');
				exit;
			}
		}
	}