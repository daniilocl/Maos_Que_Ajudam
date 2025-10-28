<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mãos que Ajudam</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/home.css">
</head>

<body>
  <!-- Header -->
  <?php include 'components/includes/header.php'; ?>

  <!-- Carrossel -->
  <div id="carouselMaosQueAjudam" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active position-relative">
        <div class="carousel-overlay"></div> <!-- overlay sobre toda a imagem -->
        <img src="public/imagens/Logo_MaosQueAjudam.jpg" class="d-block w-100" alt="Imagem 1">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
          <a href="pagina1.php" class="text-white text-decoration-none">
            <h2 class="fw-bold">Quem Somos - Mãos que Ajudam</h2>
          </a>
          <h3>Unindo mãos para transformar vidas.</h3>
          <p>
            A ONG Mãos que Ajudam nasceu com o propósito de levar solidariedade, empatia e esperança a quem mais
            precisa. Acreditamos que pequenas atitudes podem gerar grandes transformações. Nosso compromisso é ajudar
            pessoas de todas as idades e realidades, oferecendo oportunidades, acolhimento e apoio humano. Aqui, cada
            gesto conta — porque juntos, somos mais fortes.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item position-relative">
        <div class="carousel-overlay"></div>
        <img src="imagens/imagem2.jpg" class="d-block w-100" alt="Imagem 2">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
          <a href="pagina2.php" class="text-white text-decoration-none">
            <h2 class="fw-bold">Título do Segundo Tópico</h2>
          </a>
          <h3>Subtítulo</h3>
          <p>Breve descrição sobre o segundo tópico.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item position-relative">
        <div class="carousel-overlay"></div>
        <img src="imagens/imagem3.jpg" class="d-block w-100" alt="Imagem 3">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
          <a href="pagina3.php" class="text-white text-decoration-none">
            <h2 class="fw-bold">Título do Terceiro Tópico</h2>
          </a>
          <h3>Subtítulo</h3>
          <p>Pequena explicação sobre este tema.</p>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item position-relative">
        <div class="carousel-overlay"></div>
        <img src="imagens/imagem4.jpg" class="d-block w-100" alt="Imagem 4">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
          <a href="pagina4.php" class="text-white text-decoration-none">
            <h2 class="fw-bold">Título do Quarto Tópico</h2>
          </a>
          <h3>Subtítulo</h3>
          <p>Descrição curta sobre o conteúdo do quarto slide.</p>
        </div>
      </div>

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>

    <!-- Indicadores -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide-to="0" class="active"
        aria-current="true"></button>
      <button type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#carouselMaosQueAjudam" data-bs-slide-to="3"></button>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'components/includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
