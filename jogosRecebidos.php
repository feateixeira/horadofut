<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php";
require_once "conexao.php";
if(!isset($_SESSION['usuario'])){
    session_destroy();
    header("Location:index.php");
}

$sql = mysqli_query($conexao,"SELECT * FROM `jogo` JOIN conta ON idUsuario1 = IdUsuario WHERE IdUsuario2 = {$_SESSION['usuario']->id_usuario} ORDER BY data_jogo asc");
?>

<body class="bComum">

    <?php require_once "estrutura/navbar.php" ?>
    <?php require_once "estrutura/msg.php" ?>
    <main class="container bg-white bg-opacity-50">
        <center>
        <h2>Propostas Recebidas</h2>
        <table class="table">
        <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Local</th>
                    <th scope="col">Quantia</th>
                    <th scope="col" colspan="3">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while($u = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?= $u['NomeTime']?></td>
                        <td><?= $u['NomeUsuario'];?></td>
                        <td><?= $u['Cidade'];?></td>
                        <td><?= $u['Telefone'];?></td>
                        <td><?= dateSwap($u['data_jogo']);?></td>
                        <td><?= $u['hora_jogo'];?></td>
                        <td><?= $u['local_jogo'];?></td>
                        <td>R$<?= $u['quantia'];?></td>
                        <?php if($u['status_jogo'] == 'Aguardando Confirmação'):?>
                        <form action="aceitaJogo.php" method="post">
                            <input type="hidden" name="idJogo" value="<?= $u['idJogo']?>">
                            <td><button type="submit" class="btn btn-success">Aceitar</button></td>
                        </form>
                        <form action="recusaJogo.php" method="post">
                            <input type="hidden" name="idJogo" value="<?= $u['idJogo']?>">
                            <td><button type="submit" class="btn btn-danger">Recusar</button></td>
                        </form>
                        <form action="editarJogoRecebido.php" method="post">
                            <input type="hidden" name="idJogo" value="<?= $u['idJogo']?>">
                            <input type="hidden" name="idAdversario" value="<?= $u['idUsuario1']?>">
                            <input type="hidden" name="data" value="<?= $u['data_jogo']?>">
                            <input type="hidden" name="hora" value="<?= $u['hora_jogo']?>">
                            <input type="hidden" name="quantia" value="<?= $u['quantia']?>">
                            <input type="hidden" name="local" value="<?= $u['local_jogo']?>">
                            <td><button type="submit" class="btn btn-warning">Editar</button></td>
                        </form>
                        <?php else:?>
                            <td colspan="3"><div class="d-grid gap-2"><button disabled class="btn btn-<?= $u['status_jogo'] == 'Cancelado' || $u['status_jogo'] == 'Recusado' ? 'danger' : 'success' ?> btn-block"><?= $u['status_jogo']?></button></div></td>
                        <?php endif;?>    
                    </tr>
                <?php }?>   
            </tbody>
        </table>
        </center>
    </main>
    <?php require_once "estrutura/footer.php";?>
</body>

</html>