<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("Location: login.php");
			}
		?>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Menu Principal</title>
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
		
	</div>	
	
	<footer>
		<div>
			<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
		</div>
	</footer>
	</body>
</html>