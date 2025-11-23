<?php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../utils/notification_helper.php';

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
        setNotification('sucesso', 'Editado', 'Usuário atualizado com sucesso.');
        header("Location: /Maos_Que_Ajudam/src/views/administracao.php?msg=editado");
        exit;
    } else {
        setNotification('erro', 'Erro', 'Erro ao atualizar usuário. Verifique o log.');
        header("Location: /Maos_Que_Ajudam/src/views/editar_usuario.php?id={$id}");
        exit;
    }
}