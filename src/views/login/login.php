<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="/projeto_ong/public/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="login.css" />
  <title>Registro / Login</title>
</head>

<body>
<?php
  session_start();
  require_once __DIR__ . '/../../utils/notification_helper.php';
  exibirNotificationSessao(); 
  
  unset($_SESSION['cadastro_sucesso']); 
?>
  <div class="desktop-layout">
    <div class="container" id="container">
      <div class="desktop-layout">
        <?php if ($mensagem_sucesso): ?>
          <div
            style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px; text-align: center;">
            <?php echo htmlspecialchars($mensagem_sucesso); ?>
          </div>
        <?php endif; ?>
        <div class="form-container register-container">
          <form action="../../controllers/cadastro.php" method="POST">
            <h1>Crie sua conta</h1>
            <input type="text" placeholder="Nome" name="nome" required />
            <input type="text" placeholder="CPF" name="cpf" required />
            <input type="email" placeholder="Email" name="email" required />
            <input type="password" placeholder="Senha" name="senha" required />
            <input type="password" placeholder="Confirme a Senha" name="confirma_senha" required />
            <button type="submit">Cadastrar</button>
          </form>
        </div>

        <div class="form-container login-container">
          <form action="../../controllers/login.php" method="POST">
            <h1>Faça seu login</h1>
            <input type="email" placeholder="Email" name="email" required />
            <input type="password" placeholder="Senha" name="senha" required />
            <div class="content">
              <div class="checkbox">
                <input type="checkbox" id="checkbox" />
                <label for="checkbox">Lembre-me</label>
              </div>
              <div class="pass-link">
                <a href="#">Esqueceu sua senha?</a>
              </div>
            </div>
            <a href="/Maos_Que_Ajudam/index.php">
              <button type="submit">Login</button>
            </a>
            <span>ou use sua conta</span>
            <div class="social-container">
              <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
              <a href="#" class="social"><i class="lni lni-google"></i></a>
            </div>
            <button class="button_voltar"><a href="/Maos_Que_Ajudam/index.php">Voltar</a></button>
          </form>
        </div>

        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1 class="title">
                Olá! <br />
                bem-vindo de volta!
              </h1>
              <p>Insira suas credenciais para acessar sua conta</p>
              <button class="ghost" id="login">
                Login
                <i class="lni lni-arrow-left login"></i>
              </button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1 class="title">
                Olá! <br />
                vamos começar?
              </h1>
              <p>
                se você ainda não tem conta, junte-se a nós e comece sua
                jornada
              </p>
              <button class="ghost" id="register">
                Cadastrar
                <i class="lni lni-arrow-right register"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Layout Mobile -->
  <div class="mobile-layout">
    <div class="container">
      <form id="mobile-login">
        <h1>Login</h1>
        <input type="email" placeholder="Email" required />
        <input type="password" placeholder="Senha" required />
        <button type="submit">Entrar</button>
        <p>Não tem conta? <a href="#" id="show-register">Cadastre-se</a></p>
      </form>

      <form id="mobile-register" style="display: none">
        <h1>Cadastrar</h1>
        <input type="text" placeholder="Nome" required />
        <input type="text" placeholder="CPF" required />
        <input type="email" placeholder="Email" required />
        <input type="password" placeholder="Senha" required />
        <button type="submit">Cadastrar</button>
        <p>Já tem conta? <a href="#" id="show-login">Entrar</a></p>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>