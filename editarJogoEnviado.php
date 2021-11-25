<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php"; 
require_once "conexao.php";
$sql = mysqli_query($conexao,"SELECT * FROM jogo JOIN conta ON idUsuario2 = IdUsuario WHERE idJogo = {$_POST['idJogo']}");
$adversario = mysqli_fetch_assoc($sql);

?>

<body class="bComum">
    <?php require_once "estrutura/navbar.php"; ?>
    <?php require_once "estrutura/msg.php"; ?>
    <main class="cadastro">
        <h3>Jogo contra</h3>
        <img src="assets/sem-foto.png" height="100" width="100">
        <p><?= $adversario["NomeUsuario"] ?></p>
        <form class="row g-3" method="post" action="editaJogoEnviado.php">
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="data" required value="<?= $_POST['data']?>">
                <label for="floatingInput">Data</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="time" name="hora" required value="<?= $_POST['hora'];?>">
                <label for="floatingInput">Hora</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="quantia" required value="<?= $_POST['quantia'];?>">
                <label for="floatingInput">Quantia</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="local" required value="<?= $_POST['local'];?>">
                <label for="floatingInput">Local do Jogo</label>
            </div>
            <input type="hidden" name="idAdversario" value="<?= $adversario['IdUsuario']?>">
            <input type="hidden" name="idJogo" value="<?= $_POST['idJogo']?>">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-warning" type="submit" value="Alterar">Alterar Jogo</button>
            </div>
        </form>
    </main>
    <?php require_once "estrutura/footer.php"; ?>
</body>

</html>