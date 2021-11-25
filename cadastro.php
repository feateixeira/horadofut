<!DOCTYPE html>
<html lang="pt-br">
<?php require_once "estrutura/head.php"; ?>

<body id="bCadastro">
  <?php require_once "estrutura/navbar.php"; ?>
  <?php require_once "estrutura/msg.php"; ?>
  <main class="cadastro">
    <form class="row g-3" method="post" action="adicionaUsuario.php">
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="NomeUsuario" id="Nomeusuario" placeholder="Nome Usuário" required>
        <label for="floatingInput">Nome Usuário</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="NomeTime" id="NomeTime" placeholder="Nome do Time" required>
        <label for="floatingInput">Nome Time</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="Cidade" id="Cidade" placeholder="Cidade" required>
        <label for="floatingInput">Cidade</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="Telefone" id="Telefone" placeholder="Telefone" required>
        <label for="floatingInput">Telefone</label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" type="email" name="Email" id="Email" placeholder="Email" required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input class="form-control" type="password" name="Senha" id="Senha" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
      </div>
      <p>Ja tem cadastro? <a href="index.php" style="text-decoration: none">Entre.</a></p>
    </form>
  </main>
  <?php require_once "estrutura/footer.php"; ?>
</body>

</html>