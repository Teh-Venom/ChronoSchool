<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/foundation.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<?php
			if($_SESSION['email'] == null)
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
			<nav>
			<?php
				include "php/navbar.php";
			?>
			</nav>
		</header>
		
		<div class="">
			<p> </p>
		</div>
		<div class="divCorpo">
			<div class="grid-container">
				<div class="callout"> 														
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
		</div>
		<footer>
			<center>
				<h1> FOOTER</h1>
			</center>
		</footer>
	</body>
</html>