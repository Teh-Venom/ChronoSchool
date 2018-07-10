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
		<link href="css/bootstrap.css" rel="stylesheet"/>
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<meta charset="UTF-8">
		<title>Gerenciar Pessoas</title>
	</head>
	<body>	
	<header>
		<div class='divLogo'>
			<img class='logo' src='images/logo.png' title='ChronoSchool'/>			
		</div>
		<?php
			include "php/navbar.php";
		?>
	</header>
	
	<div class="corpo">			
		<div class="conteudo">
			<div class="">
				<center>
					<div class="table">
						<table border=2>		
							<tr>  
								<th> Nome</th>
								<th> Email</th>
							</tr>
							<tr>
								<td> nomezito</td>
								<td> emailito</td>
							</tr>
						</table>
					</div>
				</center>
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