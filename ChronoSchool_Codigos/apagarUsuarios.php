<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Apagar usuário?</title>
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
							$idUsuario 	= $_GET['uid'];
							$email 		= $_GET['email'];
							$nome 		= $_GET['nc'];

							echo "
							<div class='divMaior'>	
								<div class='divUsuario'>											
									<div class='inside'>
										<table style='width:100%'>
											<tr>
												<td>
													<font size='3'><b>Deseja apagar a conta do usuário:</b></font>
												</td>
												<td>
													<font size='3'>$nome</font>
												</td> 
												<td>
													<a href='gerenciarUsuarios.php' class='botaoUsuario'>Não</a>
												<td>
												<td>
													<input type='submit' name='apagar' value='Sim' class='botaoUsuario'>
												</td>
											</tr>
											<tr>
												<td>
													<font size='3'><b>E-mail:</b></font> <font size='3'>$email</font>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>";

							if(isset($_POST['apagar'])){
								include "php/conexao.php";

								$sql = "DELETE U,C FROM usuario AS U INNER JOIN comum AS C ON C.idComum = U.Comum_idComum WHERE idUsuario = ?";
								$professores = $conexao ->prepare($sql);
								$professores -> execute(array($idUsuario));
								
								header("location: gerenciarUsuarios.php");
								
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