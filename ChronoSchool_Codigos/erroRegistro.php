<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Pagina principal</title>
		<?php
			session_start();
			if($_SESSION != null)
			{
				header("location: menuPrincipal.php");
			}
		?>
	</head>
	<body>						
			<div class="conteudo">
				<div class="conteudo">
					<font size="5" face="verdana">Este e-mail já existe!</font><br><br><br>
					<div>
						<a href="registro.php" class="botaoCorpo">Voltar</a>
					</div>
				</div>
			</div>
	</body>	
</html>