<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_tipo'] !== 'admin') {
    header("Location: /Maos_Que_Ajudam/index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']); // <-- pegar o CPF
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo_usuario'];

    $usuarioModel = new Usuario($conn);
    $usuarioModel->criar($nome, $cpf, $email, $senha, $tipo); // <-- passar CPF

    header("Location: /Maos_Que_Ajudam/src/views/administracao.php?msg=usuario_criado");
    exit;
}