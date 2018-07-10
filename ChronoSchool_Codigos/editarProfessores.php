<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Editar Professor</title>
		<script>
			function validateForm() {
				var x = document.forms["atualizarProfessor"]["inicial"].value;
				var y = document.forms["atualizarProfessor"]["final"].value;
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

			$nome = $_GET['np'];
			$idProfessor = $_GET['pid'];
			$idHorario = $_GET['hid'];
			$inicial = $_GET['inicial'];
			$final = $_GET['final'];

			if(isset($_POST['alterar']))
			{
				$nome_user = $_POST['nome_professor'];
				$inicial_user = $_POST['inicial'];
				$final_user = $_POST['final'];
				include "php/conexao.php";
				$sql=	"UPDATE professor as prof
						INNER JOIN horariosdisponiveisprofessores as horario ON horario.idHorariosDisponiveisProfessores = prof.HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores
						SET prof.nomeProfessor= ? , horario.horarioInicial= ? , horario.horarioFinal = ?
						WHERE prof.idProfessor = ?";
				$cadastro = $conexao->prepare($sql);
				$cadastro -> execute(array($nome_user, $inicial_user, $final_user, $idProfessor));
			
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
				<form action="" name="atualizarProfessor" onsubmit="return validateForm()" method="POST">
					Alterar Nome do Professor
					<input type="text" name="nome_professor" value="<?php echo $nome?>" required autofocus> <br><br>
					Utilize as setas para inserir o horário <br><br>
					Alterar o horário disponível inicial
					<input type="time" name="inicial" value="<?php echo $inicial?>"step="1800" onkeydown="return false" required> <br><br>
					Alterar o horário disponível final
					<input type="time" name="final" value="<?php echo $final?>" step="1800" onkeydown="return false" required> <br><br>	
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