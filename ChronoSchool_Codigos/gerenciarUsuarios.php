<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/foundation.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
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
			<?php
				include "php/header.php";
			?>
		</header>
		<nav>
			<?php
				include "php/navbar.php";
			?>
		</nav>
		
		<div class="corpo"> 
			<div class="conteudo">
				<form action="" method="POST">

					<div class="large-6 medium-6 cell">											
						<div class="primary callout">
							Nome do Usuario
							<a href="#" class="button">Alterar</a>
						</div>
					</div>
					
				</form>
			</div>
		</div>

		<footer>
			<div>
				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
			</div>
		</footer>
	</body>
</html>