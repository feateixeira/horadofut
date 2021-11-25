<?php 
require_once "conexao.php";
session_start();

$idJogo = $_POST['idJogo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];
$quantia = $_POST['quantia'];

$sql = "UPDATE jogo SET data_jogo = '$data',hora_jogo = '$hora',local_jogo = '$local',quantia ='$quantia' , status_jogo = 'Aguardando Confirmação' WHERE idJogo = '$idJogo'";
$update = mysqli_query($conexao,$sql);
if($update){
    $_SESSION['msg'] = "Jogo alterado com sucesso!! Aguarde a confirmação do usuário";
    $_SESSION['msgColor'] = 'success';
    header("Location:jogosEnviados.php");
    exit();
}else{
    $_SESSION['msg'] = "Erro ao editar o jogo!!!!";
    $_SESSION['msgColor'] = 'danger';
    header("Location:dashboard.php");
    exit();
}

