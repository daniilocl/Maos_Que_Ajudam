<?php // 1. INÍCIO DA SESSÃO E VERIFICAÇÃO DE LOGIN // Em um sistema real, você incluiria aqui a lógica de login/autenticação. session_start(); // if (!isset($_SESSION['usuario_logado'])) { // header('Location: login.php'); // Redireciona para a página de login // exit; // } // 2. INCLUSÃO DE CONFIGURAÇÕES E CONEXÃO COM O BANCO DE DADOS // include 'src/config/db_connect.php'; // 3. LÓGICA DE PROCESSAMENTO DE FORMULÁRIO (Ex: Salvar alterações no carrossel) // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar_slide'])) { // // Lógica para sanitizar e salvar os dados no banco // // $titulo = $_POST['titulo_slide']; // // ... // // Mostrar mensagem de sucesso ou erro // } // 4. CARREGAR DADOS EXISTENTES (Ex: Dados do Slide 1) // $slide1_data = $db->query("SELECT * FROM carrossel WHERE id = 1")->fetch_assoc(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Mãos que Ajudam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        /* Estilos simples para o admin */
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <h4 class="text-center py-3 border-bottom">Administração</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"> <i
                                    class="fas fa-tachometer-alt"></i> Dashboard </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#carrossel-section"> <i
                                    class="fas fa-images"></i> Gerenciar Carrossel </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#"> <i class="fas fa-file-alt"></i> Gerenciar
                                Páginas </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#"> <i class="fas fa-users"></i> Gerenciar
                                Usuários </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="logout.php"> <i class="fas fa-sign-out-alt"></i>
                                Sair </a> </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1 class="mt-4 pb-2 border-bottom">Painel de Administração</h1>
                <section id="carrossel-section" class="pt-4">
                    <h2><i class="fas fa-images"></i> Gerenciar Slides do Carrossel</h2>
                    <p class="lead">Edite o conteúdo de cada slide do carrossel da página inicial.</p>
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white"> Slide 1: Quem Somos </div>
                        <div class="card-body">
                            <form method="POST" action="admin.php" enctype="multipart/form-data"> <input type="hidden"
                                    name="salvar_slide" value="1">
                                <div class="mb-3"> <label for="titulo1" class="form-label">Título Principal</label>
                                    <input type="text" class="form-control" id="titulo1" name="titulo"
                                        value="Quem Somos - Mãos que Ajudam" required> </div>
                                <div class="mb-3"> <label for="subtitulo1" class="form-label">Subtítulo</label> <input
                                        type="text" class="form-control" id="subtitulo1" name="subtitulo"
                                        value="Unindo mãos para transformar vidas." required> </div>
                                <div class="mb-3"> <label for="texto1" class="form-label">Texto Descritivo</label>
                                    <textarea class="form-control" id="texto1" name="texto" rows="4"
                                        required> A ONG Mãos que Ajudam nasceu com o propósito de levar solidariedade, empatia e esperança a quem mais precisa. Acreditamos que pequenas atitudes podem gerar grandes transformações. Nosso compromisso é ajudar pessoas de todas as idades e realidades, oferecendo oportunidades, acolhimento e apoio humano. Aqui, cada gesto conta — porque juntos, somos mais fortes. </textarea>
                                </div>
                                <div class="mb-3"> <label for="imagem1" class="form-label">Imagem do Slide
                                        (Upload)</label> <input type="file" class="form-control" id="imagem1"
                                        name="imagem"> <small class="form-text text-muted">A imagem atual é:
                                        public/imagens/logo/Logo_MaosQueAjudam.jpg</small> </div>
                                <div class="mb-3"> <label for="link1" class="form-label">Link (URL)</label> <input
                                        type="text" class="form-control" id="link1" name="link" value="pagina1.php"
                                        required> </div> <button type="submit" class="btn btn-success"> <i
                                        class="fas fa-save"></i> Salvar Alterações do Slide 1 </button>
                            </form>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>