<?php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../utils/notification_helper.php';

session_start();
$usuarioModel = new Usuario($conn);
$erro = '';
$BASE_URL = "/Maos_Que_Ajudam/src";

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
            setNotification('sucesso', 'Cadastro Realizado! 🎉', 'Sua conta foi criada com sucesso. Faça login para continuar.');
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
