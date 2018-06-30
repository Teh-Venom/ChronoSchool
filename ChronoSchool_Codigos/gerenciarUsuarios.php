<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<?php
			session_start();
			$_SESSION = "aaaaaaaaa";
			if($_SESSION == null)
			{
				header("location: login.php");
			}
		?>
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
				<center>	
					<form action="" method="POST">
						<div class="divMaior">	
							<div class="divUsuario">											
								<div class="inside">
									<font size="3">Nome do Usuário </font>
									<a href="#" class="botaoUsuario">Alterar</a>
								</div>
							</div>
						</div>
					</form>
				</center>
			</div>
		</div>
		<footer>

				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			

		</footer>
	</body>
</html>