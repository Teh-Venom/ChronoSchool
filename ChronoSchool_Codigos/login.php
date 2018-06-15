<!DOCTYPE html>
<html lang="PT-BR">
	<head>
	  <title>Login</title>
	  <!-- Bootstrap core CSS-->
	  <link href="css/bootstrap.css" rel="stylesheet">
	  <!-- Custom fonts for this template-->
	  <link href="css/fonte.css" rel="stylesheet" type="text/css">
	  <!-- Custom styles for this template-->
	  <link href="css/registro.css" rel="stylesheet">
	</head>
	<?php
	 if(isset($_POST["registrar"]))
	 {
		include "registro_funcoes.php";
		
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
      <div class="card-header">Login no ChronoSchool</div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">E-mail:</label>
                <input class="form-control" name="primeiroNome" id="exampleInputName" type="email" aria-describedby="nameHelp" placeholder="E-mail" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Senha:</label>	
                <input class="form-control" name="ultimoNome" id="exampleInputLastName" type="password" aria-describedby="nameHelp" placeholder="Senha" required>
              </div>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Login" required>
        </form>
        
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
