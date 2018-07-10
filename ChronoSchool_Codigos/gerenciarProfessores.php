<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Gerenciar Professores</title>
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
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

							$sql = "SELECT idProfessor,idHorariosDisponiveisProfessores,nomeProfessor,horarioInicial,horarioFinal FROM `professor` 
									INNER JOIN horariosdisponiveisprofessores ON horariosdisponiveisprofessores.idHorariosDisponiveisProfessores = professor.HorariosDisponiveisProfessores_idHorariosDisponiveisProfessores";
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
											
											<table style='width:100%'>
											<tr>
												<td>
													<font size='3'><b>Professor:</b> $nome</font>
												</td>
												<td>
													<a href='editarProfessores.php?pid=$idProfessor&hid=$idHorario&np=$nome&inicial=$inicial&final=$final' class='botaoUsuario'>Alterar</a>
												<td>
												<td>
													<a href='apagarProfessores.php?pid=$idProfessor&np=$nome' class='botaoUsuario'>Apagar</a>
											  	</td>
											</tr>
											<tr>
												<td>
													<font size='3'><b>Período disponível:</b>".date('H:i', strtotime($inicial))." <b>até </b>".date('H:i', strtotime($final))."</font>
												</td> 
											  	
											</tr>
										  </table>




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