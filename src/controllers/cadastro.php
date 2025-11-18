<?php
// src/controllers/cadastro.php

// Inclusão de dependências (Caminhos relativos CORRETOS)
// Saia de controllers/ (..), entre em db/ (db/)
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php'; 

session_start();
$usuarioModel = new Usuario($conn);
$erro = '';
$BASE_URL = "/Maos_Que_Ajudam/src"; // Define a URL base para redirecionamentos

// Variáveis para preencher o formulário em caso de erro
$nome = $cpf = $email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do POST
    $nome = trim($_POST['nome'] ?? '');
    $cpf = trim($_POST['cpf'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $confirma_senha = $_POST['confirma_senha'] ?? ''; 

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
            // Redirecionamento CORRIGIDO/CONFIRMADO para views/login/login.php
            header("Location: {$BASE_URL}/views/login/login.php"); 
            exit;
        } else {
            // Falha: pode ser e-mail/CPF duplicado ou erro de banco
            $erro = "Erro ao cadastrar. O e-mail ou CPF já podem estar em uso.";
        }
    }
}

// Inclua a View do formulário aqui. 
// require_once __DIR__ . '/../views/cadastro_form.html'; 
