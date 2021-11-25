<?php 
require_once "conexao.php";
session_start();

$idJogo = $_POST['idJogo'];
$idAdversario = $_POST['idAdversario'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];
$quantia = $_POST['quantia'];

$sql = "UPDATE jogo SET idUsuario1 = '{$_SESSION['usuario']->id_usuario}', idUsuario2 = '$idAdversario', data_jogo = '$data',hora_jogo = '$hora',local_jogo = '$local',quantia ='$quantia' , status_jogo = 'Aguardando Confirmação' WHERE idJogo = '$idJogo'";
$update = mysqli_query($conexao,$sql);
if($update){
    $_SESSION['msg'] = "Jogo alterado com sucesso!! Aguarde a confirmação do usuário";
    $_SESSION['msgColor'] = 'success';
    header("Location:dashboard.php");
    exit();
}else{
    $_SESSION['msg'] = "Erro ao editar o jogo!!!!";
    $_SESSION['msgColor'] = 'danger';
    header("Location:dashboard.php");
    exit();
}

