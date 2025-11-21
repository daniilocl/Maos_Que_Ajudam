<?php
// src/views/voluntario/cadastro_voluntario.php

// ATENÇÃO: Inclua o Controller NO TOPO para processar a lógica
// Mude o 'action' do formulário para este controller, não para o Model!
require_once __DIR__ . '/../controllers/cadastro_voluntario.php';

// O controller define $erro, $nome, $email, $cpf
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="/Maos_Que_Ajudam/public/css/style.css" rel="stylesheet">
  <title>Cadastro de Voluntário</title>
  <style>
    /* Estilos CSS do seu código */
    .form-cadastro {
      max-width: 450px;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <?php // include __DIR__ . '/../db/connection.php'; // Removido, pois já está no controller ?>
  <?php include __DIR__ . '/../components/header.php'; ?>


  <main class="d-flex align-items-center py-5 bg-light min-vh-100">
    <section class="container">
      <div class="row justify-content-center">
        <div class="d-flex justify-content-center">
          <!-- ACTION APONTA PARA O CONTROLLER -->
          <form action="" method="post" class="bg-white form-cadastro">

            <div class="d-flex align-items-center mb-4 border-bottom pb-3">
              <img src="/Maos_Que_Ajudam/public/imagens/logo/Logo_MaosQueAjudam.jpg" alt="Logo Mãos que Ajudam"
                width="70" class="me-3 rounded-3 shadow-sm">
              <h2 class="h4 mb-0 text-primary">Cadastro de Voluntários</h2>
            </div>

            <!-- Mensagem de ERRO -->
            <?php if (!empty($erro)): ?>
              <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($erro) ?>
              </div>
            <?php endif; ?>

            <div class="mb-3">
              <label for="nome" class="form-label">Nome Completo</label>
              <!-- Adiciona o value para manter o dado preenchido em caso de erro -->
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome completo" required
                value="<?= htmlspecialchars($nome) ?>">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" required
                value="<?= htmlspecialchars($email) ?>">
            </div>

            <div class="mb-4">
              <label for="cpf" class="form-label">CPF (Somente números)</label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" maxlength="14"
                required value="<?= htmlspecialchars($cpf) ?>">
            </div>

            <!-- NOVOS CAMPOS DE SENHA -->
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" required>
            </div>

            <div class="mb-4">
              <label for="confirma_senha" class="form-label">Confirme a Senha</label>
              <input type="password" class="form-control" name="confirma_senha" id="confirma_senha" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              <i class="fas fa-user-plus me-2"></i> Cadastrar Voluntário
            </button>

            <p class="mt-3 text-center text-muted">
              <small>Já tem cadastro? <a href="/Maos_Que_Ajudam/src/views/login/login.php">Faça login aqui</a></small>
            </p>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- (Cards e Footer) -->
  <section style="padding:60px 0; background: #f8f9fa;">
    <div class="container" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px;">
      <div style="background:white; padding:25px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.1);">
        <a href="/Maos_Que_Ajudam/index.php">
          <h3 style="font-weight:600; margin-bottom:15px;">Quem Somos</h3>
        </a>
        <p>Organização sem fins lucrativos dedicada a criar impacto social positivo e transformação na vida das pessoas.
        </p>
      </div>
      <div style="background:white; padding:25px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.1);">
        <a href="/Maos_Que_Ajudam/src/views/projetos.php">
          <h3 style="font-weight:600; margin-bottom:15px;">Projetos</h3>
        </a>
        <p>Desenvolvemos iniciativas sociais focadas em educação, saúde e apoio à comunidade carente.</p>
      </div>
      <div style="background:white; padding:25px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.1);">
        <a href="/Maos_Que_Ajudam/src/views/doacoes.php">
          <h3 style="font-weight:600; margin-bottom:15px;">Como Ajudar</h3>
        </a>
        <p>Saiba como contribuir e participar das nossas ações, seja como voluntário ou doador.</p>
      </div>
    </div>
  </section>
  <footer style="background: linear-gradient(135deg,#3b82f6,#1e40af); color:white; padding:60px 0;">
    <div class="container">
      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px;">
        <div>
          <h5 style="font-weight:700; margin-bottom:20px;"> Mãos que Ajudam 👐</h5>
          <p style="opacity:0.85;">Somos uma ONG comprometida em promover
          <p>solidariedade e impactar vidas positivamente.</p>
          Cada gesto faz diferença.</p>
        </div>
        <div>
          <h6 style="font-weight:600; margin-bottom:15px;">Contato</h6>
          <p style="opacity:0.85;">📍 São Paulo, SP – Brasil</p>
          <p style="opacity:0.85;">✉️ contato@maosqueajudam.org</p>
          <p style="opacity:0.85;">📞 +55 (11) 49028922</p>
          <p style="opacity:0.85;">🕒 Seg–Sex, 9h às 17h</p>
        </div>
      </div>
      <hr style="margin:40px 0; border-color: rgba(255,255,255,0.2);">
      <div
        style="display:flex; flex-direction:column-reverse flex-md-row; justify-content:space-between; align-items:center; gap:20px;">
        <p style="opacity:0.75; font-size:14px;">© 2025 <strong>Mãos Que Ajudam</strong>. Todos os direitos reservados.
        </p>
        <div style="display:flex; gap:15px;">
          <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 16 16">
              <path d="M8 0C5.83..." />
            </svg></a>
          <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 16 16">
              <path d="M5.026..." />
            </svg></a>
          <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 448 512">
              <path d="M100.28..." />
            </svg></a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>