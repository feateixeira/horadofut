<?php

session_start();

require_once "conexao.php";

$sql = "UPDATE jogo SET status_jogo = 'Recusado' WHERE idJogo = {$_POST['idJogo']}";
$update = mysqli_query($conexao,$sql);

$_SESSION['msg'] = "Jogo recusado!!";
$_SESSION['msgColor'] = "success";
header("Location:jogosRecebidos.php");
exit();