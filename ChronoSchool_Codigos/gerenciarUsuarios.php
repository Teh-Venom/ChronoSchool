<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Gerenciar Usuários</title>
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

							$sql = "SELECT U.idUsuario,U.email,U.Permissoes_idPermissoes,C.nome,C.idComum,P.tipo FROM usuario as U 
							INNER JOIN permissoes AS P ON P.idPermissoes = U.Permissoes_idPermissoes
							INNER JOIN comum as C ON C.idComum = U.comum_IdComum 
							WHERE U.Permissoes_idPermissoes != 1";
							$usuarios = $conexao ->prepare($sql);
							$usuarios -> execute();

							foreach ($usuarios as $u)
							{	
								$idUsuario = $u['idUsuario'];
								$idComum = $u['idComum'];
								$email = $u['email'];
								$nome = $u['nome'];
								$nomePermissao = $u['tipo'];
								
								echo "
								<div class='divMaior'>	
									<div class='divUsuario'>											
										<div class='inside'>
											<table style='width:100%'>
												<tr>
													<td>
														<font size='3'><b>Nome:	</b> $nome</font>
													</td>
													<td>
														<font size='3'><b>E-mail: </b> $email</font>
													</td> 
													<td>
														<a href='editarUsuarios.php?uid=$idUsuario' class='botaoUsuario'>Alterar</a>
													<td>
													<td>
														<a href='apagarUsuarios.php?uid=$idUsuario&email=$email&nc=$nome' class='botaoUsuario'>Apagar</a>
													</td>
												</tr>
												<tr>
													<td colspan='3'>
														<font size='3' style='text-align: left;'><b>Tipo de Usuário:</b> $nomePermissao</font>
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
					<a href="cadastrarUsuario.php" class="botaoUsuario">Cadastrar usuário</a>
				</center>
			</div>
		</div>
		<footer>

				<img class="logo" src="images/logo.png" title="ChronoSchool"/>			

		</footer>
	</body>
</html>