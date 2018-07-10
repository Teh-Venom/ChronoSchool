<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Cadastro de Usuários</title>
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
			include "php/conexao.php";
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}		

			if(isset($_POST['cadastrar']))
			{
				$nome = $_POST['nome_usuario'];
				$email = $_POST['email_usuario'];
				$senha = $_POST['senha_usuario'];
				$tipoUsuario = $_POST['tipo_usuario'];

				$sql= "INSERT INTO comum VALUES ('',?,'',NULL,NULL);
						SELECT @ultimo_id := MAX(comum.idComum) FROM comum;
						INSERT INTO usuario VALUES ('',?,?,?,@ultimo_id)";
				$cadastro = $conexao->prepare($sql);
				$cadastro -> execute(array($nome,$email,md5($senha),$tipoUsuario));

				header("Location: gerenciarUsuarios.php");
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
					Nome do Usuário
					<input type="text" name="nome_usuario" placeholder="Insira o nome" required autofocus> <br><br>
					E-mail do Usuário
					<input type="email" name="email_usuario" placeholder="Insira um e-mail" required autofocus> <br><br>
					Senha do Usuário
					<input type="text" name="senha_usuario" placeholder="Insira a senha" required autofocus> <br><br>
					Tipo de Usuário
					<select name="tipo_usuario">
						<?php
							$sql = "SELECT * FROM permissoes";
							$permissoes = $conexao ->prepare($sql);
							$permissoes -> execute();

							foreach ($permissoes as $p) 
							{
								$id = $p['idPermissoes'];
								$tipo = $p['tipo'];

								echo "<option value='$id'>$tipo</option>";
							}
						?>
					</select>
					<br><br>
					<input type="submit" class="botaoUsuario" name="cadastrar" value="Cadastrar usuário">
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