<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php";
require_once "conexao.php";
if(!isset($_SESSION['usuario'])){
    session_destroy();
    header("Location:index.php");
}

$sql = mysqli_query($conexao,"SELECT * FROM conta WHERE IdUsuario != {$_SESSION['usuario']->id_usuario}");

?>

<body class="bComum">

    <?php require_once "estrutura/navbar.php" ?>
    <?php require_once "estrutura/msg.php" ?>
    <main class="container bg-white bg-opacity-50">
        <center>
        <h2>Times</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while($u = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?= $u['NomeTime']?></td>
                        <td><?= $u['NomeUsuario'];?></td>
                        <td><?= $u['Cidade'];?></td>
                        <form action="marcarJogo.php" method="post">
                            <input type="hidden" name="idAdversario" value="<?= $u['IdUsuario']?>">
                            <input type="hidden" name="nomeAdversario" value="<?= $u['NomeUsuario']?>">
                            
                            <td><button type="submit" class="btn btn-success">Marcar Jogo</button></td>
                        </form>
                        
                    </tr>
                <?php }?>   
            </tbody>
        </table>
        </center>
    </main>
    <?php require_once "estrutura/footer.php";?>
</body>

</html>