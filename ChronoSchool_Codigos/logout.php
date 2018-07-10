<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Mas já?</title>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: index.php");
			}

			if(isset($_POST['sair']))
			{
				session_destroy();
				header("location:index.php");
			}
		?>
	</head>
	<body>	
		<header>
			<?php
				include "php/header.php";
			?>
		</header>
		<nav>
			<?php
				include 'php/navbar.php';
			?>
		</nav>
		<div class="corpo">
			<div class="conteudo">
				<h2> Deseja realmente sair?</h2>
				<div class="conteudo">
					<form action="" method="POST">
						<center>
							<a href="menuPrincipal.php" class="botaoUsuario"> Não </a> &nbsp
							<input type="submit" name="sair" class="botaoUsuario" value="Sim">
						</center>
					</form>
				</div>
			</div>
		</div>

		<footer>
			<div>
				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
			</div>
		</footer>
	</body>	
</html>