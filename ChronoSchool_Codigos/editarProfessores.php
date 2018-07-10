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
				header("location: login.php");
			}	

			$nome = $_GET['np'];
			$idProfessor = $_GET['pid'];
			$idHorario = $_GET['hid'];
			$inicial = $_GET['inicial'];
			$final = $_GET['final'];

			if(isset($_POST['alterar']))
			{
				
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
					Alterar Nome do Professor
					<input type="text" name="nome_professor" value="<?php echo $nome?>" required autofocus> <br><br>
					Alterar o horário disponível inicial
					<input type="time" name="inicial" value="<?php echo $inicial?>"required> <br><br>
					Alterar o horário disponível final
					<input type="time" name="final" value="<?php echo $final?>" required> <br><br>	
					<br><br>
					<input type="submit" class="botaoUsuario" name="alterar" value="Atualizar">
				</form>
			</center>
		</div>
	</div>	
	
	<footer>
		<div>
			<img class="logo" src="images/logo.png" title="ChronoSchool"/>			
		</div>
	</footer>
	</body>
</html>