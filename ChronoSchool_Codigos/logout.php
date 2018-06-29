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
					
		<div class="corpo">
			<div class="conteudo">
				<h2> Deseja realmente sair?</h2>
				<div class="conteudo">
					<form action="" method="POST">
						<a href="menuPrincipal.php">
							<button class="botaoCorpo">Não</button>
						</a>
						<input type="submit" name="sair" class="botaoCorpo" value="Sim">
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