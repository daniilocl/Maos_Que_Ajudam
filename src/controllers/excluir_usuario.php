<?php
require_once __DIR__ . '/../db/connection.php';
require_once __DIR__ . '/../models/Usuario.php';
session_start();

// Verifica login
if (!isset($_SESSION['user_id'])) {
    header("Location: /Maos_Que_Ajudam/src/views/login/login.php");
    exit;
}

// Verifica permissão
if ($_SESSION['user_tipo'] !== 'admin') {
    header("Location: /Maos_Que_Ajudam/index.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "DELETE FROM Usuario WHERE idUsuario = $id";
mysqli_query($conn, $sql);

header("Location: /Maos_Que_Ajudam/src/views/administracao.php");
exit;
