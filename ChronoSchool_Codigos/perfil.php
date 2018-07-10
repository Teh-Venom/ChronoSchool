<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link href="css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
		<title>Perfil</title>
		<link rel="icon" href="images/icone.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/icone.ico" type="image/x-icon" />
		<script type='text/javascript'>
			function confirmar_cadastro()
			{
				alert('Perfil atualizado com sucesso!');		
			}
		</script>
		<?php
			session_start();
			if($_SESSION == null)
			{
				header("location: login.php");
			}

			include "php/conexao.php";

			if(isset($_POST['atualizar']))
			{
				$nome = $_POST['nome'];
				$snome = $_POST['sobrenome'];
				$cpf = $_POST['cpf'];
				$tel = $_POST['telefone'];

				$sql="SELECT @id := Comum_idComum FROM usuario WHERE email = ?;
					UPDATE comum SET
					nome = ?,
					ultimo_nome = ?,
					cpf=?,
					telefone=?
					WHERE comum.idComum = @id ";
				$atualizar = $conexao -> prepare($sql);
				$atualizar -> execute(array($_SESSION['email'],$nome,$snome,$cpf,$tel));
				
				header("location: perfil.php");
			}	

			$sql = "SELECT email,nome,ultimo_nome,cpf,telefone FROM `usuario` 
					INNER JOIN comum on comum.idComum = usuario.Comum_idComum
					WHERE email  = ? ";
			$busca = $conexao ->prepare($sql);
			$busca ->execute(array($_SESSION['email']));

			foreach ($busca as $user) 
			{
				$user_nome=$user['nome'];
				$user_snome=$user['ultimo_nome'];
				$user_cpf=$user['cpf'];
				$user_tel=$user['telefone'];
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
					<p>Nome</p>
					<input type="text" name="nome" value="<?php echo  $user_nome?>" required autofocus> <br>
					<p>Sobrenome</p>
					<input type="text" name="sobrenome"value="<?php echo  $user_snome?>" required autofocus> <br>
					<p>CPF</p>	
					<input type="text" name="cpf" value="<?php echo  $user_cpf?>" placeholder="Vazio"  required autofocus> <br>
					<p>Telefone</p>
					<input type="text" name="telefone" value="<?php echo  $user_tel?>"  placeholder="Vazio" required autofocus> <br>

					<br><br>
					<input type="submit" class="botaoUsuario" onclick="confirmar_cadastro()" name="atualizar" value="Atualizar meus dados">
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