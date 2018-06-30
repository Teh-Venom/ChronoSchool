<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Pagina principal</title>
		<?php
			$_SESSION['email'] = "aaaaaa";
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
	
	<div id="corpo">			
		
		
	</div>	
	
	<footer>
		<div>
			<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
		</div>
	</footer>
	</body>
</html>