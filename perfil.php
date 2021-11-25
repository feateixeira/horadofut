<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php"; ?>

<body class="bComum">
  <?php require_once "estrutura/navbar.php"; ?>
  <?php require_once "estrutura/msg.php"; ?>
  <main class="cadastro">
      <img src="assets/sem-foto.png" height="100" width="100">
      <p><?= $_SESSION['usuario']->nome_usuario?></p>
    <form class="row g-3" method="post" action="alteraUsuario.php">
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="NomeTime" id="NomeTime" placeholder="Nome do Time" required value="<?= $_SESSION['usuario']->nome_time?>">
        <label for="floatingInput">Nome Time</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="Cidade" id="Cidade" placeholder="Cidade" required value="<?= $_SESSION['usuario']->cidade?>"> 
        <label for="floatingInput">Cidade</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="Telefone" id="Telefone" placeholder="Telefone" required value="<?= $_SESSION['usuario']->telefone?>">
        <label for="floatingInput">Telefone</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="email" name="Email" id="Email" placeholder="Email" required value="<?= $_SESSION['usuario']->email?>">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input class="form-control" type="password" name="Senha" id="Senha" placeholder="Password">
        <label for="floatingPassword">Senha</label>
        <div id="emailHelp" class="form-text">Deixe a senha em branco para manter a mesma.</div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit" value="Alterar">Alterar</button>
      </div>
    </form>
  </main>
  <?php require_once "estrutura/footer.php"; ?>
</body>

</html>