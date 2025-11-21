<?php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';

session_start();

// Verifica login e permissão
if (!isset($_SESSION['user_id']) || $_SESSION['user_tipo'] !== 'admin') {
    header("Location: /Maos_Que_Ajudam/index.php");
    exit;
}

if (!isset($_GET['id'])) {
    die("ID inválido.");
}

$usuarioModel = new Usuario($conn);
$usuario = $usuarioModel->buscarPorId($_GET['id']);

if (!$usuario) {
    die("Usuário não encontrado.");
}

include __DIR__ . '/../views/editar_usuario.php';
