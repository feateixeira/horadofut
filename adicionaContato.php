<?php

require_once "conexao.php";

session_start();


$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

if(empty(trim($email)) || empty(trim($mensagem))){
    $_SESSION['msg'] = "Campo(s) Vazio(s)";
    $_SESSION['msgColor'] = "danger";
    header("Location:contato.php");
    exit();
}else{
    $sql = "INSERT INTO contato(EmailC,Mesage) values('$email','$mensagem')";
    $insert = mysqli_query($conexao,$sql);
    $_SESSION['msg'] = "Mensagem enviada com sucesso!!!!";
    $_SESSION['msgColor'] = "success";
    header("Location:contato.php");
    exit();
}