<!DOCTYPE html>
<html lang="PT-BR">
	<head>
	  <title>Cadastrar Professor</title>
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
		$nomeCompleto = $_POS['nomeCompleto'];
		$horaInicial = $_POS['horaInicial'];
		$horaFinal = $_POS['horaFinal'];
		 
	 }
	
	?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar um  Professor</div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
			<label for="inputName">Nome Completo</label>
			<input class="form-control" name="nomeCompleto" id="inputName" type="text" aria-describedby="nameHelp" placeholder="Nome Completo">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="inputHoraInicial">Hora Disponível Inicial</label>
                <input class="form-control" name="horaInicial" id="inputHoraInicial" type="time" placeholder="Hora Inicial">
              </div>
              <div class="col-md-6">
                <label for="inputHoraFinal">Hora Disponível Final</label>
                <input class="form-control" name="horaFinal" id="inputHoraFinal" type="time" placeholder="Hora Final">
              </div>
            </div>
          </div>
          <input type="submit" name="registrar" class="btn btn-primary btn-block" href="login.html" value="Registrar">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="professores.html">Retornar</a>
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
