<!DOCTYPE html>
<html lang="pt-br">

<?php require_once "estrutura/head.php";

if(isset($_SESSION['usuario'])){
    header("Location:dashboard.php");
    exit();
}

?>

<body class="body" id="bLogin">
    <?php require_once "estrutura/navbar.php"; ?>
    <?php require_once "estrutura/msg.php"; ?>
    <main class="mainindex">
        <form class="login" action="autenticaUsuario.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="text" class="form-control" name="NomeUsuario" id="NomeUsuario">
            </div>
            <label for="inputPassword5" class="form-label">Senha</label>
            <input type="password" id="Senha" name="Senha" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
                Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.
            </div><br>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Me lembre</label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Entrar</button>
            </div><br>
            <p>Ainda não tem cadastro? Clique <a href="cadastro.php" style="text-decoration: none">aqui.</a></p>
        </form>
    </main>
    <?php require_once "estrutura/footer.php"; ?>
</body>

</html>