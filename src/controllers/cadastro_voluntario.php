<?php
// src/controllers/cadastro_voluntario.php

// Inclusão de dependências
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php'; 

session_start();
// Usa a classe Usuario (Model central)
$usuarioModel = new Usuario($conn); 
$erro = '';
$BASE_URL = "/Maos_Que_Ajudam/src"; // Define a URL base para redirecionamentos

// Variáveis para preencher o formulário em caso de erro
$nome = $cpf = $email = '';
$senha = $confirma_senha = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar dados do POST
    $nome = trim($_POST['nome'] ?? '');
    $cpf = trim($_POST['cpf'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $confirma_senha = $_POST['confirma_senha'] ?? ''; 

    // 1. Validação básica
    if (empty($nome) || empty($cpf) || empty($email) || empty($senha)) {
        $erro = "Todos os campos são obrigatórios.";
    } elseif ($senha !== $confirma_senha) {
        $erro = "As senhas não conferem.";
    } else {
        // 2. Chama o Model para cadastrar como Voluntário
        if ($usuarioModel->cadastrarVoluntario($nome, $cpf, $email, $senha)) {
            // Sucesso: redireciona para o login com a mensagem
            $_SESSION['cadastro_sucesso'] = "Cadastro de voluntário realizado! Faça login.";
            header("Location: {$BASE_URL}/views/login/login.php"); 
            exit;
        } else {
            // Falha: e-mail/CPF duplicado ou erro de banco
            $erro = "Erro ao cadastrar. O e-mail ou CPF já podem estar em uso, ou ocorreu um erro no servidor.";
        }
    }
}

// Se houver erro, a execução continua para a View.
// CORREÇÃO FINAL ROBUSTA (Linha 46): Usa dirname(__DIR__) para obter o caminho de 'src/' 
// e garante que a View seja incluída a partir daí.
require_once dirname(__DIR__) . '/views/cadastro_voluntario.php';