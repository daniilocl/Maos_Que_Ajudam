<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="/projeto_ong/index.php">
      <img src="/projeto_ong/public/imagens/logo/Logo_MaosQueAjudam.jpg" 
           alt="Logo Mãos que Ajudam" 
           width="50" height="50" 
           class="me-2 rounded-circle">
      <span style="font-size: 25px;">Mãos Que Ajudam</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/projeto_ong/index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/projeto_ong/src/pages/doacoes.php">Doações</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Mais</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/projeto_ong/src/pages/projetos.php">Projetos</a></li>
            <li><a class="dropdown-item" href="/projeto_ong/src/pages/contribuicoes.php">Contribuições e Parcerias</a></li>
            <li><a class="dropdown-item" href="/projeto_ong/src/pages/cadastro_voluntario.php">Cadastro de Voluntário</a></li>
            <li><a class="dropdown-item" href="/projeto_ong/src/pages/administracao.php">Administração</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <a href="/projeto_ong/src/pages/login/login.php" class="btn btn-light text-primary ms-lg-3 mt-2 mt-lg-0 btn-login">Login</a>
  </div>
</nav>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
