<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<style>
</style>
<style>
  /* Forçar texto do header em branco */
  .navbar { color: #ffffff; }
  .navbar .navbar-brand,
  .navbar .navbar-brand span { color: #ffffff !important; }
  .navbar .nav-link { color: #ffffff !important; }
  .navbar .nav-link.active { color: #ffffff !important; font-weight:600; }
  /* Mantém itens do dropdown com cor padrão (escura) para legibilidade sobre fundo branco */
  .navbar .dropdown-item { color: inherit; }
  /* Ajusta botão de login para texto branco */
  .navbar .btn-login { color: #ffffff !important; }
</style>
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="/Maos_Que_Ajudam/index.php">
      <img src="/Maos_Que_Ajudam/public/imagens/logo/Logo_MaosQueAjudam.jpg" 
           alt="Logo Mãos que Ajudam" 
           width="50" height="50" 
           class="me-2 rounded-circle">
      <span style="font-size: 30px;"><b>Mãos Que Ajudam</b></span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/Maos_Que_Ajudam/index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/Maos_Que_Ajudam/src/views/doacoes.php">Doações</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Mais</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/Maos_Que_Ajudam/src/views/projetos.php">Projetos</a></li>
            <li><a class="dropdown-item" href="/Maos_Que_Ajudam/src/views/contribuicoes.php">Contribuições e Parcerias</a></li>
            <li><a class="dropdown-item" href="/Maos_Que_Ajudam/src/views/cadastro_voluntario.php">Cadastro de Voluntário</a></li>
            <li><a class="dropdown-item" href="/Maos_Que_Ajudam/src/views/administracao.php">Administração</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <?php if (isset($_SESSION['user_id'])): ?>
      <div class="dropdown ms-lg-3 mt-2 mt-lg-0">
        <a class="btn btn-light text-primary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION['user_nome'] ?? 'Usuário'); ?>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
          <li><a class="dropdown-item" href="/Maos_Que_Ajudam/src/controllers/logout.php">Sair</a></li>
        </ul>
      </div>
    <?php else: ?>
      <a href="/Maos_Que_Ajudam/src/views/login/login.php" class="btn btn-outline-light ms-lg-3 mt-2 mt-lg-0 btn-login">Login</a>
    <?php endif; ?>
  </div>
</nav>

</body>
</html>