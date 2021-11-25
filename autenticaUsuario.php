<?php
require "conexao.php";
session_start();

$login = $_POST["NomeUsuario"];

$senha = $_POST["Senha"];

if (empty($login) || empty($senha)) {
    $_SESSION['msg'] = 'Você deve digitar um usuário e senha';
    $_SESSION['msgColor'] = "danger";
    header("Location:index.php");
} else {
    $login = trim($login);
    $senha = md5($senha);
    $sql = mysqli_query($conexao, "SELECT * FROM conta WHERE NomeUsuario = '$login'");
    $resultado = mysqli_num_rows($sql);

    if ($resultado == 0 || $resultado < 0) {
        $_SESSION['msg'] = 'Usuário inexistente.Registre-se!!!';
        $_SESSION['msgColor'] = "warning";
        header("Location:index.php");
    }else{
        $sql = mysqli_query($conexao,"SELECT * FROM conta WHERE NomeUsuario = '$login' AND Senha = '$senha'");
        $resultado = mysqli_num_rows($sql);

        if($resultado == 0 || $resultado < 0){
            $_SESSION['msg'] = 'Usuário ou senha inválidos!!!!';
            $_SESSION['msgColor'] = "danger";
            header("Location:index.php");
        }else{
            $dados = mysqli_fetch_assoc($sql);
            $_SESSION['usuario'] = new stdClass;
            $_SESSION['usuario']->id_usuario = $dados["IdUsuario"];
            $_SESSION['usuario']->nome_usuario = $dados["NomeUsuario"];
            $_SESSION['usuario']->nome_time = $dados["NomeTime"];
            $_SESSION['usuario']->senha = $dados["Senha"];
            $_SESSION['usuario']->cidade = $dados["Cidade"];
            $_SESSION['usuario']->telefone = $dados["Telefone"];
            $_SESSION['usuario']->email = $dados["Email"];
            header('Location:dashboard.php');
            exit();
        }
    }
}
