<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>HF - hora do fut</title>
</head>
<body>
<head>
        <div class="head">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="formListar.php">Times</a>
                </div>
              </nav>
        </div>
    </head>

    <main >
        


            <?php require_once "conexao.php"?>
            <?php require_once "Usuario.php"?>
            <?php
            //metodod insereUsuario//
            session_start();
            function insereUsuario($conexao,$usuario){
                    $sql="insert into conta(NomeUsuario,NomeTime,Senha,Cidade,Telefone,Email)
                    values('
                    $usuario->NomeUsuario',
                    '$usuario->NomeTime',
                            '$usuario->Senha',
                            '$usuario->Cidade',
                            '$usuario->Telefone',
                            '$usuario->Email')";
                $resultado=mysqli_query($conexao,$sql);
                return $resultado;
                }


//----Método listaUsuario---
            function listausuario($conexao){
                $sql ="select * from conta";
                $resultado=mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado)){
                ?>

                <div style="
                    width: 1620px;
                    height: 100%;
                    top: 5,1%;
                    right: 0%;
                    text-align: center;
                    background: #EFF0F1;
                    position: absolute;
                    padding-top:15px;">

                    <div style="
                        width: 1550px;
                        padding:15px;">

                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nome do Time</th>
                                    <th scope="col">Nome do Usuario</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Telefone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td><input class="form-control" value="<?php echo $array['NomeTime'];?>" name=NomeTime type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled></td>
                                    <td><input class="form-control" value="<?php echo $array['NomeUsuario'];?>" name=NomeUsuario type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled></td>
                                    <td><input class="form-control" value="<?php echo $array['Cidade'];?>" name=Cidade type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled></td>
                                    <td><input class="form-control" value="<?php echo $array['Telefone'];?>" name=Telefone type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled></td>
                                    </tr>
                                    
                                </tbody>
                        </table>
                    </div>
                </div>

            <?php
                }
            }

//----método removeUsuario-------
    function removeUsuario($conexao,$id){
        $sql="delete from conta where IdUsuario='$id'";
        $resultado=mysqli_query($conexao,$sql);
        return $resultado;

    }

    
    //-----Método ListarDash----
    function listarDash($conexao){
    $sql ="select * from conta where IdUsuario=".$_SESSION['id_usuario'];
    $resultado=mysqli_query($conexao,$sql);
    while ($array=mysqli_fetch_assoc($resultado)){
    ?>
    <div style="
            width: 283px;
            height: 100%;
            top: 5,1%;
            left: 0%;
            text-align: center;
            background: #b7d5ac;
            position: absolute;
            padding-top:100px;
            align-items:center;
            text-align:center;">     
            
            <img src="assets/sem-foto.png" class="avatarImage" style="
                vertical-align: middle;
                width: 150px;
                height: 150px;
                border-radius: 50%;
                border:3px solid black;
                margin: 10px;
                border: none;">
           
                 <form action="AlterarDash.php" method="GET">
                <input type=hidden value=<?php echo $array['IdUsuario'];?> name=IdUsuario>
              
           
                <p>Nome Usuário:</p>
                <div class="row mb-3" >
                    <div class="colFormLabelSm" >
                    <input type="text" value=<?php echo $array['NomeUsuario'];?> name=NomeUsuario class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com" style="text-align:center; align-items:center; ">
                    </div>
                </div>

             
                <p>Nome Time:</p>
                <div class="row mb-3">
                    <div class="colFormLabelSm">
                    <input type="text" value=<?php echo $array['NomeTime'];?> name=NomeTime class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com" style="text-align:center; align-items:center; ">
                    </div>
                </div>
                    
                <p>Cidade</p>
                <div class="row mb-3">
                    <div class="colFormLabelSm">
                    <input type="text" value=<?php echo $array['Cidade'];?> name=Cidade class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com" style="text-align:center; align-items:center; ">
                    </div>
                </div>                
          
                <p>Telefone:</p>
                <div class="row mb-3">
                    <div class="colFormLabelSm">
                    <input type="text" value=<?php echo $array['Telefone'];?> name=Telefone class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com" style="text-align:center; align-items:center; ">
                    </div>
                </div> 

                <p>Email:</p>
                <div class="row mb-3">
                    <div class="colFormLabelSm">
                    <input type="text" value=<?php echo $array['Email'];?> name=Email class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com" style="text-align:center; align-items:center; ">
                    </div>
                </div>
          
             
                    <input type="submit" value="alterar" style="width:80px; height:30px; background:#0000FF; color:white;">
                
            </form><!--fim do formulário para alterar--> 
    <br>
            <form action="remove-usuario.php" method="POST">
                            <input type=hidden value=<?php echo $array['IdUsuario'];?> name=IdUsuario>
                          
                                <input type=submit value=Remover style="width:80px; height:30px; background:#FF0000; color:white;">
                            
                    
                
            </form>
   
        
                    <input type=hidden value=<?php echo $array['IdUsuario'];?> name=IdUsuario>
               
                    
                
<!-- fim do formulário para remover-->
    </div>
    
    <?php
}
}
?> 

<?php
     function alterar($conexao,$usuario){
        $sql="update conta set
        NomeUsuario= '$usuario->NomeUsuario',
        NomeTime= '$usuario->NomeTime',
        Cidade='$usuario->Cidade',
        Telefone='$usuario->Telefone',
        Email='$usuario->Email'
        where IdUsuario='$usuario->IdUsuario' ";
    $resultado=mysqli_query($conexao,$sql);
    return $resultado;



?>  
<?php
        }
?>

               

        

    </main>

  
</body>
</html>
