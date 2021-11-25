<?php
session_start();

require_once "conexao.php";
require_once "classes/Usuario.php";

foreach ($_POST as $d) {
    if (empty(trim($d))) {
        $_SESSION['msg'] = "Campo(s) Vazio(s)";
        $_SESSION['msgColor'] = "danger";
        header("Location:cadastro.php");
        exit();
    }
}

$usuario = new Usuario();
$usuario->setNomeUsuario(trim($_POST['NomeUsuario']));
$usuario->setNomeTime($_POST['NomeTime']);
$usuario->setSenha($_POST['Senha']);
$usuario->setCidade($_POST['Cidade']);
$usuario->setTelefone($_POST['Telefone']);
$usuario->setEmail(trim($_POST['Email']));


$sql = "INSERT INTO conta(NomeTime,NomeUsuario,Cidade,Telefone,Email,Senha) VALUES ('{$usuario->getNomeTime()}','{$usuario->getNomeUsuario()}','{$usuario->getCidade()}','{$usuario->getTelefone()}','{$usuario->getEmail()}',md5('{$usuario->getSenha()}'))";
$insert = mysqli_query($conexao, $sql);

$_SESSION['msg'] = "Cadastrado com Sucesso";
$_SESSION['msgColor'] = "success";
header("Location:index.php");
exit();
