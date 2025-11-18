<?php
// src/controllers/logout.php

session_start();

// Destrói todas as variáveis de sessão
$_SESSION = array();

// Se for preciso destruir o cookie de sessão também, o faz.
// Nota: Isso apagará o cookie de sessão e não apenas os dados da sessão!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destrói a sessão
session_destroy();

// Redireciona o usuário para a página de login
// Confirme a BASE_URL se necessário, mas geralmente um caminho relativo/absoluto funciona
$BASE_URL = "/Maos_Que_Ajudam/src";
header("Location: {$BASE_URL}/views/login/login.php");
exit;