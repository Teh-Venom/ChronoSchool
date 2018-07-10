<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Apagar professor?</title>
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
		<?php 
			include "php/navbar.php";
		?>
		
		<div class="corpo">			
			<div class="conteudo">								
				<center>	
					<form action="" method="POST">
						<?php
							$nomeProfessor = $_GET['np'];
							$idProfessor = $_GET['pid'];
							echo "
							<div class='divMaior'>	
								<div class='divUsuario'>											
									<div class='inside'>
										<font size='3'><b>Deseja apagar o cadastro do professor:</b></font>
										<font size='3'>$nomeProfessor</font>
										<a href='gerenciarProfessores.php' class='botaoUsuario'>Não</a>
										<input type='submit' name='apagar' value='Sim' class='botaoUsuario'>
									</div>
								</div>
							</div>";

							if(isset($_POST['apagar'])){
								include "php/conexao.php";

								$sql = "DELETE `professor`,`horariosdisponiveisprofessores` FROM `professor` INNER JOIN horariosdisponiveisprofessores ON horariosdisponiveisprofessores.idHorariosDisponiveisProfessores = professor.HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores WHERE idProfessor = ?";
								$professores = $conexao ->prepare($sql);
								$professores -> execute(array($idProfessor));
								
								header("location: gerenciarProfessores.php");
								
							}
						?>
					</form>
					<br><br><br>
					
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