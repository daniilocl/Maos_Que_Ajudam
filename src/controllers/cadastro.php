<?php
// Saia de controllers/ (..), entre em db/ (db/)
// src/controllers/cadastro.php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php'; // <-- CAMINHO CORRIGIDO

session_start();
$usuarioModel = new Usuario($conn);
$erro = '';

// Variáveis para preencher o formulário em caso de erro
$nome = $cpf = $email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do POST (o nome dos campos deve corresponder aos do HTML)
    $nome = trim($_POST['nome'] ?? '');
    $cpf = trim($_POST['cpf'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $confirma_senha = $_POST['confirma_senha'] ?? ''; // (Adicionar este campo no seu HTML)

    // Validação básica
    if (empty($nome) || empty($cpf) || empty($email) || empty($senha)) {
        $erro = "Todos os campos são obrigatórios.";
    } elseif ($senha !== $confirma_senha) {
        $erro = "As senhas não conferem.";
    } else {
        // Chama o Model para cadastrar
        if ($usuarioModel->cadastrarUsuario($nome, $cpf, $email, $senha)) {
            // Sucesso: redireciona para o login com a mensagem de sucesso
            $_SESSION['cadastro_sucesso'] = "Cadastro realizado com sucesso! Faça login.";
            header("Location: /Maos_Que_Ajudam/src/views/login/login.php"); 
            exit;
        } else {
            // Falha: pode ser e-mail/CPF duplicado ou erro de banco
            $erro = "Erro ao cadastrar. O e-mail ou CPF já podem estar em uso.";
        }
    }
}

// Inclua a View do formulário aqui. (A View deve usar as variáveis $erro, $nome, $email, $cpf)
// Se o seu formulário estiver em /views/cadastro_form.html, você faria:
// require_once __DIR__ . '/../views/cadastro_form.html'; 
?>