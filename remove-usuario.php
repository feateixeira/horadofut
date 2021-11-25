<!--remove-usuario-->

<?php require_once "conexao.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "banco-usuario.php"?>

<?php
	$id=$_POST['IdUsuario'];
	removeUsuario($conexao,$id);
	header("Location:listaDash.php?removido=true");
?>