<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="login.css" />
    <title>Registro / Login</title>
  </head>
  <body>
      <div class="desktop-layout">
          <div class="container" id="container">
            <div class="desktop-layout">
              <div class="form-container register-container">
                <form action="#">
                  <h1>Crie sua conta</h1>
                  <input type="text" placeholder="Nome" required />
                  <input type="text" placeholder="CPF" required />
                  <input type="email" placeholder="Email" required />
                  <input type="password" placeholder="Senha" required />
                  <button href="../Pagina_1/index.html">Registrar</button>
                </form>
              </div>

              <div class="form-container login-container">
                <form action="#">
                  <h1>Faça seu login</h1>
                  <input type="email" placeholder="Email" required />
                  <input type="password" placeholder="Senha" required />
                  <div class="content">
                    <div class="checkbox">
                      <input type="checkbox" id="checkbox" />
                      <label for="checkbox">Lembre-me</label>
                    </div>
                    <div class="pass-link">
                      <a href="#">Esqueceu sua senha?</a>
                    </div>
                  </div>
                  <button>Login</button>
                  <span>ou use sua conta</span>
                  <div class="social-container">
                    <a href="#" class="social"
                      ><i class="lni lni-facebook-fill"></i
                    ></a>
                    <a href="#" class="social"
                      ><i class="lni lni-google"></i
                    ></a>
                  </div>
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
                      Registro
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
            <h1>Registro</h1>
            <input type="text" placeholder="Nome" required />
            <input type="text" placeholder="CPF" required />
            <input type="email" placeholder="Email" required />
            <input type="password" placeholder="Senha" required />
            <button type="submit">Registrar</button>
            <p>Já tem conta? <a href="#" id="show-login">Entrar</a></p>
          </form>
        </div>
      </div>

    <script src="script.js"></script>
  </body>
</html>