<?php
require_once __DIR__ . '/../utils/session_helper.php';
// Inicia sessão de forma segura antes de qualquer saída
secure_session_start();
?>

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
        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo htmlspecialchars($_SESSION['user_nome'] ?? 'Usuário'); ?>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
          <li>
            <form id="logout-form" method="POST" action="/Maos_Que_Ajudam/src/controllers/logout.php" style="display:inline;">
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars(get_csrf_token()); ?>">
              <button type="button" class="dropdown-item" onclick="confirmarLogout('logout-form')">Sair</button>
            </form>
          </li>
        </ul>
      </div>
    <?php else: ?>
      <a href="/Maos_Que_Ajudam/src/views/login/login.php" class="btn btn-outline-light ms-lg-3 mt-2 mt-lg-0 btn-login">Login</a>
    <?php endif; ?>
  </div>
</nav>

<!-- SweetAlert2 + logout confirmation -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function confirmarLogout(formId) {
    Swal.fire({
      title: 'Deseja fazer logout?',
      text: 'Você será desconectado da sua conta.',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Sim, sair',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        const form = document.getElementById(formId);
        if (form) form.submit();
      }
    });
  }
</script>