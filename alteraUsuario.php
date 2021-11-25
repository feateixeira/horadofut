<?php
session_start();

require_once "conexao.php";
require_once "classes/Usuario.php";




$usuario = new Usuario();
$usuario->setNomeTime($_POST['NomeTime']);
$usuario->setSenha($_POST['Senha']);
$usuario->setCidade($_POST['Cidade']);
$usuario->setTelefone($_POST['Telefone']);
$usuario->setEmail(trim($_POST['Email']));

if(empty(trim($_POST['Senha']))){
    $sql = "UPDATE conta SET NomeTime = '{$usuario->getNomeTime()}',Cidade = '{$usuario->getCidade()}',Telefone = '{$usuario->getTelefone()}', Email = '{$usuario->getEmail()}' WHERE IdUsuario = {$_SESSION['usuario']->id_usuario}";
}else{
    $usuario->setSenha($_POST['Senha']);
    $sql = "UPDATE conta SET NomeTime = '{$usuario->getNomeTime()}',Cidade = '{$usuario->getCidade()}',Telefone = '{$usuario->getTelefone()}', Email = '{$usuario->getEmail()}', Senha = md5('{$usuario->getSenha()}') WHERE IdUsuario = {$_SESSION['usuario']->id_usuario}";
}

$update = mysqli_query($conexao,$sql);

$select = mysqli_query($conexao,"SELECT * FROM conta WHERE IdUsuario = {$_SESSION['usuario']->id_usuario}");
$dados = mysqli_fetch_assoc($select);
$_SESSION['usuario']->id_usuario = $dados["IdUsuario"];
$_SESSION['usuario']->nome_usuario = $dados["NomeUsuario"];
$_SESSION['usuario']->nome_time = $dados["NomeTime"];
$_SESSION['usuario']->senha = $dados["Senha"];
$_SESSION['usuario']->cidade = $dados["Cidade"];
$_SESSION['usuario']->telefone = $dados["Telefone"];
$_SESSION['usuario']->email = $dados["Email"];

$_SESSION['msg'] = "Alterado com Sucesso";
$_SESSION['msgColor'] = "success";
header("Location:perfil.php");
exit();
