<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
        .form-cadastro {
            max-width: 450px; /* Largura máxima para o formulário */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <?php include __DIR__ . '/../db/connection.php'; ?>
    <?php include __DIR__ . '/../components/header.php'; ?>


    <main class="d-flex align-items-center py-5 bg-light min-vh-100">
        <section class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-center ">
                    <form action="../../src/models/voluntario.php" method="post" class="bg-white form-cadastro">
                        
                        <div class="d-flex align-items-center mb-4 border-bottom pb-3">
                            <img src="/Maos_Que_Ajudam/public/imagens/logo/Logo_MaosQueAjudam.jpg"
                                alt="Logo Mãos que Ajudam"
                                width="70"
                                class="me-3 rounded-3 shadow-sm">
                            <h2 class="h4 mb-0 text-primary">Cadastro de Voluntários</h2>
                        </div>

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="nome@exemplo.com" required>
                        </div>

                        <div class="mb-4">
                            <label for="cpf" class="form-label">CPF (Somente números)</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" maxlength="14" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-user-plus me-2"></i> Cadastrar Voluntário
                        </button>

                        <p class="mt-3 text-center text-muted">
                            <small>Já tem cadastro? <a href="#">Faça login aqui</a></small>
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
</html>