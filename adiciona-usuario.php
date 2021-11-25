<?php require_once "conexao.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "dashboard.php"?>
<?php
$usuario=new Usuario();

    $usuario->NomeUsuario= 
    $_POST['NomeUsuario'];

    $usuario->NomeTime=
    $_POST['NomeTime'];

    $usuario->Senha=
    $_POST['Senha'];

    $usuario->Cidade=
    $_POST['Cidade'];

    $usuario->Telefone=
    $_POST['Telefone'];

    $usuario->Email=
    $_POST['Email'];

if($usuario->NomeUsuario != "" && $usuario->Senha != ""){
    insereUsuario($conexao,$usuario);
    echo '<script type="text/javascript">'; 
    echo 'confirm("Cadastro realizado com sucesso!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';

} else{
echo mysqli_error($conexao);
}

?>

