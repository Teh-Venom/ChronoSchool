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
					<center class="grid-container">	
						<form action="" method="POST">
							<div class="large-6 medium-6 cell">											
								<div class="primary callout">
									Nome do Usuario
									<a href="#" class="button">Alterar</a>
								</div>
							</div>
							
							<div class="large-6 medium-6 cell">											
								<div class="primary callout">
									Nome do Usuario
									<a href="#" class="button">Alterar</a>
								</div>
							</div>
						</form>
					</center>
			</div>
		</div>
		<footer>
			<center>
				<h1>Footer</h1>
			</center>
		</footer>
	</body>
</html>