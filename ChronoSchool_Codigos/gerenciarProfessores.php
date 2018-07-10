<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Gerenciar Professores</title>
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
							include "php/conexao.php";

							$sql = "SELECT idProfessor,idHorariosDisponiveisProfessores,nomeProfessor,horarioInicial,horarioFinal FROM `professor` INNER JOIN horariosdisponiveisprofessores ON horariosdisponiveisprofessores.idHorariosDisponiveisProfessores = professor.HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores";
							$professores = $conexao ->prepare($sql);
							$professores -> execute();

							foreach ($professores as $p)
							{	
								$idProfessor = $p['idProfessor'];
								$idHorario = $p['idHorariosDisponiveisProfessores'];
								$nome = $p['nomeProfessor'];
								$inicial = $p['horarioInicial'];
								$final = $p['horarioFinal'];

								echo "
								<div class='divMaior'>	
									<div class='divUsuario'>											
										<div class='inside'>
											<font size='3'><b>Professor:</b> $nome</font>
											<font size='3'><b>Horario:</b> $inicial <b>ás </b> $final</font>
											<a href='editarProfessores.php?pid=$idProfessor&hid=$idHorario&np=$nome&inicial=$inicial&final=$final' class='botaoUsuario'>Alterar</a>
										</div>
									</div>
								</div>";
							}
						?>
					</form>
					<br><br><br>
					<a href="cadastrarProfessores.php" class="botaoUsuario">Cadastrar professor</a>
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