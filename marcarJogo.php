<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php"; ?>

<body class="bComum">
    <?php require_once "estrutura/navbar.php"; ?>
    <?php require_once "estrutura/msg.php"; ?>
    <main class="cadastro">
        <h3>Jogo contra</h3>
        <img src="assets/sem-foto.png" height="100" width="100">
        <p><?= $_POST['nomeAdversario'] ?></p>
        <form class="row g-3" method="post" action="marcaJogo.php">
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="data" required>
                <label for="floatingInput">Data</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="time" name="hora" required>
                <label for="floatingInput">Hora</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="quantia" required>
                <label for="floatingInput">Quantia</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="local" required>
                <label for="floatingInput">Local do Jogo</label>
            </div>
            <input type="hidden" name="idAdversario" value="<?= $_POST['idAdversario']?>">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit" value="Alterar">Marcar</button>
            </div>
        </form>
    </main>
    <?php require_once "estrutura/footer.php"; ?>
</body>

</html>