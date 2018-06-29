<?php
	function registrar($nome,$ultimoNome,$email,$senha,$senhaConf)
	{	
		include "conexao.php";

		$sql = "SELECT COUNT(*) AS resultado FROM `usuario` WHERE email = ?";
		$verificacao = $conexao -> prepare($sql);
		$verificacao -> execute(array($email));
		$resultado = null;

		foreach ($verificacao as $x)
		{
			$resultado  = $x['resultado'];
		}
		
		if($resultado <= 0)
		{
			
			if($senha == $senhaConf)
			{
				
				$sql = "INSERT INTO comum VALUES('',?,?,NULL,NULL);
						SELECT @ultimo_id := MAX(comum.idComum) FROM comum;
						INSERT INTO usuario VALUES('',?,?,NULL,@ultimo_id);
						"; 
				$registro = $conexao -> prepare($sql);
				$registro -> execute(array($nome,$ultimoNome,$email,md5($senha)));
				session_start();
				$_SESSION['email'] = $email;
				header("location: menuPrincipal.php");
			}
			else
			{
				echo "ERoROr";
			}
		}	
		else
		{
			header("location:erroRegistro.php");	
			return;
		}
	}
?>