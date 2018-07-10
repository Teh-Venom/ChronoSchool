<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}
		?>
		<title>Insituições</title>
	</head>
	
	<body>
		<header>
			<?php
				include "php/header.php";
			?>	
		</header>
		<?php
			include "php/navbar.php";
		?>
		<div class="corpo">
			<div class="conteudo">								
				
				<a href="cadastrarInsituicao.php" class="botaoUsuario">Cadastrar nova instituição</a>
			</div>
		</div>
		<footer>

				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			

		</footer>
	</body>
</html>