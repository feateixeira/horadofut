<?php

session_start();

require_once "conexao.php";

$sql = "UPDATE jogo SET status_jogo = 'Cancelado' WHERE idJogo = {$_POST['idJogo']}";
$update = mysqli_query($conexao,$sql);

$_SESSION['msg'] = "Jogo cancelado!!";
$_SESSION['msgColor'] = "success";
header("Location:jogosEnviados.php");
exit();