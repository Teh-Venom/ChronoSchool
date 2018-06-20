<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Pagina principal</title>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}
		?>
	</head>
	<body>	
	<header>
		<div class='divLogoHeader'>
			<img class='logo' src='images/logo.png' title='ChronoSchool'/>			
			<div class='divBotaoLogin'>
				<?php
					include "php/botao_perfil.php";
				?>
			</div>
		</div>
		
	</header>
		<?php 
			include "php/navbar.php";
		?>
	
	<div class="corpo">			
		
		
	</div>	
	
	<footer>
		<div>
			<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
		</div>
	</footer>
	</body>
</html>