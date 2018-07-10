<?php
	include "conexao.php";
	$sql = "SELECT * FROM Permissoes";
	$query = $conex -> prepare($sql);
	$query -> execute();
	
	foreach($query as $s)
	{
			$idPermissoes = $s['idPermissoes'];
			$tipo = $s['tipo'];
			if ($idPermissoes_old == $idPermissoes){
				echo "<option selected value='$idPermissoes'>$tipo</option>";
			} else {
				echo "<option value='$idPermissoes'>$tipo</option>";
			}
	}
	$contatos = NULL;
?>