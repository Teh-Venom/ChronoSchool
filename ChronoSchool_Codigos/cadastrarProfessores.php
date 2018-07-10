<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Cadastro de Professores</title>
		<script>
			function validateForm() {
				var x = document.forms["cadastrarProfessor"]["inicial"].value;
				var y = document.forms["cadastrarProfessor"]["final"].value;
				if (x >= y) {
					alert("O horário inicial deve ocorrer antes que o horário final.");
					return false;
				}
			}
		</script>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}		

			if(isset($_POST['cadastrar']))
			{
				
				include "php/conexao.php";

				$nome = $_POST['nome_professor'];
				$inicial = $_POST['inicial'];
				$final = $_POST['final'];

				$sql="INSERT INTO  `horariosdisponiveisprofessores` VALUES ('',?,?);
						SELECT @ultimo_id := MAX(horariosdisponiveisprofessores.idHorariosDisponiveisProfessores) FROM horariosdisponiveisprofessores;
					INSERT INTO `professor` VALUES ('',?,@ultimo_id)";
				$cadastro = $conexao->prepare($sql);
				$cadastro -> execute(array($inicial,$final,$nome));

				header("Location: gerenciarProfessores.php");
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
				<form action="" name="cadastrarProfessor" onsubmit="return validateForm()" method="POST">
					Nome do Professor
					<input type="text" name="nome_professor" required autofocus> <br><br>
					Utilize as setas para inserir o horário <br><br>
					Horario disponível Inicial
					<input type="time" name="inicial" value="00:00:00" step="1800" onkeydown="return false" required> <br><br>
					Horario disponível Final
					<input type="time" name="final" value="00:00:00" step="1800" onkeydown="return false" required> <br><br>	
					<br><br>
					<input type="submit" class="botaoUsuario" name="cadastrar" value="Cadastrar professor">
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