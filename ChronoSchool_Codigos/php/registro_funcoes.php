<?php
	function tratamento($nome,$ultimoNome,$email,$senha,$senhaConf)
	{
		$nome 		= preg_replace('/[^[:alpha:]_]/', '',$nome);
		$ultimoNome = preg_replace('/[^[:alpha:]_]/', '',$ultimoNome);
		$email 		= preg_replace('/[^[:alpha:]_]/', '',$email);
		$senha 		= preg_replace('/[^[:alpha:]_]/', '',$senha);
		$senhaConf 	= preg_replace('/[^[:alpha:]_]/', '',$senhaConf);
		
		$dados = array(
			$nome,
			$ultimoNome,
			$email,
			$senha,
			$senhaConf
		);
		return $dados;
	}
	function registrar($nome,$ultimoNome,$email,$senha,$senhaConf)
	{
		$dados = tratamento($nome,$ultimoNome,$email,$senha,$senhaConf);
		
		if($dados[3] == $dados[4])
		{
			include "conexao.php";
			$sql = "SCRIPT SQL AQUI "; 
				
			$registo = $conexao -> prepare($sql);
			$registro -> execute(array($valores));
		}
		else
		{
			echo "feião";
		}
	}
	
	registrar("Nome","Ultimo nome","Email@email.com","senha","senha");
?>