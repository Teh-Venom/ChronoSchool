<!DOCTYPE html>
<html lang="PT-BR">
	<head>
	  <title>Registro</title>
	  <!-- Bootstrap core CSS-->
	  <link href="css/bootstrap.css" rel="stylesheet">
	  <!-- Custom fonts for this template-->
	  <link href="css/fonte.css" rel="stylesheet" type="text/css">
	  <!-- Custom styles for this template-->
	  <link href="css/registro.css" rel="stylesheet">
	</head>
	<?php
    session_start();
    if($_SESSION != null)
    {
      header("location: painel.php");
    }

	 if(isset($_POST["registrar"]))
	 {
		include "php/registro_funcoes.php";
		
		$nome = $_POST['primeiroNome'];
		$ultNome = $_POST['ultimoNome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$confSenha = $_POST['confSenha'];
		
		registrar($nome,$ultNome,$email,$senha,$confSenha);
	 }
	
	?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar sua conta</div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Primeiro nome</label>
                <input class="form-control" name="primeiroNome" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Seu primeiro nome" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Último nome</label>	
                <input class="form-control" name="ultimoNome" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Seu último nome" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <input class="form-control" name="senha" id="exampleInputPassword1" type="password" placeholder="Senha" required>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirme sua Senha</label>
                <input class="form-control" name="confSenha" id="exampleConfirmPassword" type="password" placeholder="Confirme sua senha" required>
              </div>
            </div>
			 <div class="form-group">
				<label for="exampleInputEmail1">E-mail </label>
				<input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="E-mail" required>
			</div>
          </div>
          <input type="submit" name="registrar" class="btn btn-primary btn-block" href="login.html" value="Registrar" required>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Página de Login</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>