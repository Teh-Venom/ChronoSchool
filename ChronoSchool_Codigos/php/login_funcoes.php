<?php
	function logar($email,$senha)
	{
		include "conexao.php";
		$senha = md5($senha);
		$sql = "SELECT * FROM usuario WHERE usuario.email = ?";
		$verifica = $conexao -> prepare($sql);
		$verifica -> execute(array($email));

		foreach ($verifica as $x) 
		{
			$id = $x['idUsuario'];
			if($email == $x['email'])
			{
				if($senha == $senha)
				{
					session_start();
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $email;
					header("Location: menuPrincipal.php");
				}
				else
				{
					header("Location: erro.php");
				}
			}
			else
			{
				header("Location: erro.php");
			}
		}
	}
?>