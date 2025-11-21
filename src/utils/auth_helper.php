<?php
// src/utils/auth_helper.php

/**
 * Inicia a sessão se não estiver iniciada e verifica a autenticação do usuário.
 * * @param string $required_type O tipo de usuário necessário para acessar a página ('cliente', 'admin', etc.).
 * @param string $redirect_path O caminho para onde redirecionar se a autenticação falhar.
 */
function checkAuth($required_type = 'cliente', $redirect_path = '/Maos_Que_Ajudam/src/views/login/login.php') {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // 1. Verifica se o usuário está logado
    if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_tipo'])) {
        // Não logado: redireciona para a tela de login
        header("Location: {$redirect_path}");
        exit;
    }

    $current_user_type = $_SESSION['user_tipo'];

    // 2. Verifica a permissão baseada no tipo de usuário
    if ($required_type === 'admin' && $current_user_type !== 'admin') {
        // Cliente ou outro tipo tentando acessar a área de admin: 
        // Redireciona para uma área de não-autorizado ou a home do cliente.
        $home_path = '/Maos_Que_Ajudam/src/views/home_cliente.php';
        header("Location: {$home_path}");
        exit;
    }
}

// Exemplo de uso no topo da sua 'administracao.php':
// require_once __DIR__ . '/../utils/auth_helper.php';
// checkAuth('admin'); // Apenas administradores podem continuar
?>