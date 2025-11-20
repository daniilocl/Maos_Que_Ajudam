<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mãos Que Ajudam</title>

  <!-- Google Fonts: Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS Reset / Base -->
  <style>
    * {margin:0; padding:0; box-sizing:border-box; font-family:'Outfit', sans-serif;}
    body {background:#f5f5f5; color:#111;}
    a {text-decoration:none; color:inherit;}
    ul {list-style:none;}
    h1,h2,h3,h4,h5,h6 {margin:0; line-height:1.2;}
    p {margin:0; line-height:1.6;}
    .container {width:90%; max-width:1200px; margin:0 auto;}
    .btn {display:inline-block; padding:10px 20px; border-radius:6px; font-weight:600; transition:0.3s; cursor:pointer; text-align:center;}
    .btn-primary {background:linear-gradient(135deg, #3b82f6, #1e40af); color:white; border:none;}
    .btn-primary:hover {filter:brightness(1.1);}
  </style>
</head>
<body>
<!-- HERO SECTION -->
<section style="background: linear-gradient(135deg,#3b82f6,#1e40af); color:white; padding:80px 0; text-align:center;">
  <h2 style="font-size:2.8em; font-weight:700; margin-bottom:20px;">Transformando Vidas com Solidariedade</h2>
  <p style="font-size:1.2em; opacity:0.9; max-width:700px; margin:0 auto 30px;">Cada gesto de amor faz diferença. Junte-se à nossa corrente do bem e ajude a transformar vidas hoje mesmo.</p>
  <a href="/Maos_Que_Ajudam/src/views/cadastro_voluntario.php" class="btn btn-primary">Faça Parte</a>
</section>

<!-- SEÇÃO DE CARDS / INFORMAÇÕES -->
<section style="padding:60px 0; background:#f5f5f5;">
  <div class="container" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px;">
    <div style="background:white; padding:25px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.1);">
      <a href="/Maos_Que_Ajudam/index.php">
        <h3 style="font-weight:600; margin-bottom:15px;">Quem Somos</h3>
      </a>
      <p>Organização sem fins lucrativos dedicada a criar impacto social positivo e transformação na vida das pessoas.</p>
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

<!-- FOOTER MODERNO TECH -->
<footer style="background: linear-gradient(135deg,#3b82f6,#1e40af); color:white; padding:60px 0;">
  <div class="container">
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:30px;">
      <!-- Sobre -->
      <div>
        <h5 style="font-weight:700; margin-bottom:20px;"> Mãos que Ajudam 👐</h5>
        <p style="opacity:0.85;">Somos uma ONG comprometida em promover 
          <p>solidariedade e impactar vidas positivamente.</p> 
          Cada gesto faz diferença.</p>
      </div>
      <!-- Contato -->
      <div>
        <h6 style="font-weight:600; margin-bottom:15px;">Contato</h6>
        <p style="opacity:0.85;">📍 São Paulo, SP – Brasil</p>
        <p style="opacity:0.85;">✉️ contato@maosqueajudam.org</p>
        <p style="opacity:0.85;">📞 +55 (11) 49028922</p>
        <p style="opacity:0.85;">🕒 Seg–Sex, 9h às 17h</p>
      </div>
    </div>

    <hr style="margin:40px 0; border-color: rgba(255,255,255,0.2);">

    <div style="display:flex; flex-direction:column-reverse flex-md-row; justify-content:space-between; align-items:center; gap:20px;">
      <p style="opacity:0.75; font-size:14px;">© 2025 <strong>Mãos Que Ajudam</strong>. Todos os direitos reservados.</p>
      <div style="display:flex; gap:15px;">
        <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 16 16"><path d="M8 0C5.83..." /></svg></a>
        <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 16 16"><path d="M5.026..." /></svg></a>
        <a href="#"><svg width="24" fill="white" style="opacity:0.85;" viewBox="0 0 448 512"><path d="M100.28..." /></svg></a>
      </div>
    </div>
  </div>
</footer>

 <!-- Botão WhatsApp Fixo -->
  <button class="Btn" onclick="window.open('https://wa.me/5511999999999', '_blank')">
    <span class="svgContainer">
      <svg viewBox="0 0 16 16" height="2.5em" class="svgIcon" fill="white">
        <path
          d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z">
        </path>
      </svg>
    </span>
    <span class="BG"></span>
</button>

</body>
</html>