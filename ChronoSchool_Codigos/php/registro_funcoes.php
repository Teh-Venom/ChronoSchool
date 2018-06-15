<?php
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