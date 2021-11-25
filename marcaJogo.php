<?php 
require_once "conexao.php";
session_start();

$idAdversario = $_POST['idAdversario'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];
$quantia = $_POST['quantia'];


$sql = "INSERT INTO jogo(idUsuario1,idUsuario2,data_jogo,hora_jogo,local_jogo,quantia,status_jogo) values ('{$_SESSION['usuario']->id_usuario}','{$idAdversario}','{$data}','{$hora}','{$local}','{$quantia}','Aguardando Confirmação')";
$insert = mysqli_query($conexao,$sql);
if($insert){
    $_SESSION['msg'] = "Jogo agendado com sucesso!! Aguarde a confirmação do usuário";
    $_SESSION['msgColor'] = 'success';
    header("Location:dashboard.php");
    exit();
}else{
    $_SESSION['msg'] = "Erro ao agendar o jogo!!!!";
    $_SESSION['msgColor'] = 'danger';
    header("Location:dashboard.php");
    exit();
}

