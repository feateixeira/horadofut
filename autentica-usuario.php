<?php
    require "conexao.php";

    session_start();

    $login = isset($_POST["NomeUsuario"]) ? addslashes(trim($_POST["NomeUsuario"])) : FALSE;

    $senha = isset($_POST["Senha"]) ? md5(trim($_POST["Senha"])) : FALSE;

    if(!$login || !$senha){
        echo "Você deve digitar sua senha e login!";
        exit();
    }

    $SQL = "SELECT * FROM conta WHERE NomeUsuario = '$login' AND Senha = '$senha'";
    $result_id = mysqli_query($conexao,$SQL);
    $total = mysqli_num_rows($result_id);
    if($total){
            $dados = mysqli_fetch_array($result_id);
            if(!strcmp($senha, $dados["Senha"]))
            {
                $_SESSION["id_usuario"]= $dados["IdUsuario"];
                $_SESSION["nome_usuario"]= $dados["NomeUsuario"];
                $_SESSION["nome_time"] = stripslashes($dados["NomeTime"]);
                $_SESSION["senha"]= $dados["Senha"];
                $_SESSION["cidade"]= $dados["Cidade"];
                $_SESSION["telefone"]= $dados["Telefone"];
                $_SESSION["email"]= $dados["Email"];
                header("Location:formListar.php");
                exit;
            }
            else
            {
            "Senha inválida!";
            exit();
            }
        }
        else
        {
            echo "O login fornecido por você é inexistente!";
            exit;
        }
