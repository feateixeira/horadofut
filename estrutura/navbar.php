<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (!isset($_SESSION['usuario'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Login</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">DashBoard</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre o Projeto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regras.php">Regras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION['usuario'])) : ?>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Registrar-se</a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="jogosRecebidos.php">Propostas Recebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jogosEnviados.php">Proposta Enviadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Sair</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>