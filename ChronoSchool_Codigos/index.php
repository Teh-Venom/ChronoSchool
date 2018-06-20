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
		<header>
			<?php
				include "php/header.php";
			?>
		</header>
					
		<div class="corpo">
			<div class="conteudo">
				<a href="registro.php" class="verticalElement"> 
					<input type="button" class="botaoCorpo" value="Registre-se">
				</a>
				

			</div>
		</div>

		<footer>
			<div>
				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
			</div>
		</footer>
	</body>	
</html>