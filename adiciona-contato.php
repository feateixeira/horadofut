<?php require_once "conexao.php"?>
<?php require_once "adiciona-contato.php"?>
<?php require_once "contatoenvio.php"?>
<?php
$contato=new Contato();

    $contato->EmailC= 
    $_POST['EmailC'];

    $contato->Mesage=
    $_POST['Mesage'];

   
           
            //metodod insereUsuario//
            function insereContato($conexao,$contato){
                    $sql="insert into contato(EmailC,Mesage)
                    values('
                    $contato->EmailC',
                    '$contato->Mesage')";
                $resultado=mysqli_query($conexao,$sql);
                return $resultado;
                }

if(insereContato($conexao,$contato)){

    echo '<script type="text/javascript">'; 
    echo 'confirm("Mensagem enviada com sucesso!!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';

} else{
echo mysqli_error($conexao);
}

?>