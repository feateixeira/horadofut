<!DOCTYPE html>
<html lang="pt-br">

<?php require_once "estrutura/head.php";?>

<body class="body" id="bContato">
    <?php require_once "estrutura/navbar.php"; ?>
    <?php require_once "estrutura/msg.php"?>
    <main class="contato">
        <form method="post" action="adicionaContato.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email" required value="<?= isset($_SESSION['usuario']->email) ? $_SESSION['usuario']->email : '';?>">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="Txt" name="mensagem" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="Submit">Enviar</button>
            </div>
        </form>
    </main>
    <?php require_once "estrutura/footer.php"; ?>
</body>

</html>