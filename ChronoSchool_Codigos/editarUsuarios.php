<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<title>Editar usuário></title>

		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}	

			$idUsuario = $_GET['uid'];

			include "php/conexao.php";

			$sql = "SELECT * FROM usuario as U 
					INNER JOIN permissoes AS P ON P.idPermissoes = U.Permissoes_idPermissoes
					INNER JOIN comum as C ON C.idComum = U.comum_IdComum 
					WHERE U.idUsuario = $idUsuario";
			$usuarios = $conexao ->prepare($sql);
			$usuarios -> execute();
			foreach ($usuarios as $u)
			{	
				$email_old 			= $u['email'];
				$idPermissoes_old 	= $u['Permissoes_idPermissoes'];
				$idComum_old 		= $u['Comum_idComum'];
				$nome_old 			= $u['nome'];
				$sobrenome_old		= $u['ultimo_nome'];
				$cpf_old 			= $u['cpf'];
				$telefone_old 		= $u['telefone'];
			}

			if(isset($_POST['alterar']))//dur
			{
				$nome = $_POST['nome'];
				$snome = $_POST['sobrenome'];
				$cpf = $_POST['cpf'];
				$tel = $_POST['telefone'];
				$email = $_POST['email'];
				if($cpf == ''){
					$cpf = NULL;
				}
				if($tel == ''){
					$tel = NULL;
				}
				include "php/conexao.php";
				$sql="UPDATE usuario
					INNER JOIN comum ON comum.idComum = usuario.Comum_idComum
					SET	nome = ?,
						ultimo_nome = ?,
						cpf=?,
						telefone=?,
						email=?
					WHERE usuario.idUsuario = ?";
				$atualizar = $conexao -> prepare($sql);
				$atualizar -> execute(array($nome, $snome, $cpf, $tel, $email, $idUsuario));

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
				<form action="" method="POST">
						<p>Nome: </p>
						<input type="text" name="nome" 		value="<?php echo  $nome_old?>" 														required autofocus> <br>
						<p>Sobrenome:</p>
						<input type="text" name="sobrenome"	value="<?php echo  $sobrenome_old?>"													required autofocus> <br>
						<p>CPF:</p>	
						<input type="text" name="cpf" 		value="<?php echo  $cpf_old?>" 			placeholder="Vazio" 							autofocus> <br>
						<p>Telefone:</p>
						<input type="text" name="telefone" 	value="<?php echo  $telefone_old?>"  	placeholder="Vazio" 							autofocus> <br>
						<p>E-mail:</p>	
						<input type="email" name="email" 	value="<?php echo  $email_old?>" 		placeholder="Vazio" 							required autofocus> <br>
						
						<br><br>
						<a href='gerenciarUsuarios.php' class='botaoUsuario'>Cancelar</a>
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