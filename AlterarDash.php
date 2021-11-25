<!--alterarDash.php-->
<?php require_once "conexao.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "banco-usuario.php"?>

<?php
	$usuario=new Usuario();
	$usuario->IdUsuario =$_GET["IdUsuario"];
	$usuario->NomeUsuario    =$_GET["NomeUsuario"];
	$usuario->NomeTime     =$_GET["NomeTime"];
	$usuario->Cidade=$_GET["Cidade"];
	$usuario->Telefone=$_GET["Telefone"];
	$usuario->Email 
	=$_GET["Email"];

	alterar($conexao,$usuario);
	header("Location:listaDash.php?removido=true");

?>