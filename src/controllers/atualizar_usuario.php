<?php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';

session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_tipo'] !== 'admin') {
    header("Location: /Maos_Que_Ajudam/index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['idUsuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $usuarioModel = new Usuario($conn);

    if ($usuarioModel->atualizar($id, $nome, $email, $tipo_usuario)) {
        header("Location: /Maos_Que_Ajudam/src/views/administracao.php?msg=editado");
        exit;
    } else {
        echo "Erro ao atualizar usuário!";
    }
}