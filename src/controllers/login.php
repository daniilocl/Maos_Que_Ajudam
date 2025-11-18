<?php
// src/controllers/login.php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php'; // <-- CAMINHO CORRIGIDO

session_start();
$usuarioModel = new Usuario($conn);
$erro = '';

// Exibe a mensagem de sucesso do cadastro, se houver
$sucesso = $_SESSION['cadastro_sucesso'] ?? '';
unset($_SESSION['cadastro_sucesso']); // Limpa a mensagem após exibir

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    
    $usuario = $usuarioModel->buscarPorEmail($email);

    // 1. Verifica se o usuário existe E se a senha confere
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        
        // 2. Credenciais OK! Inicia a sessão
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['user_nome'] = $usuario['nome'];
        $_SESSION['user_tipo'] = $usuario['tipo_usuario'];
        
        header("Location: /Maos_Que_Ajudam/dashboard.php");
        exit;

    } else {
        $erro = "E-mail ou senha inválidos.";
    }
}

// Inclua a View do formulário aqui.
// Se o seu formulário estiver em /views/login_form.html, você faria:
// require_once __DIR__ . '/../views/login_form.html'; 
?>