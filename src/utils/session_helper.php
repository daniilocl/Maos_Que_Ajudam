<?php

/**
 * Inicia a sessão com parâmetros mais seguros.
 * Use `require_once __DIR__ . '/utils/session_helper.php'` e chame `secure_session_start()`.
 */
function secure_session_start()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }

    // Configura os parâmetros do cookie de sessão
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443;
    $httponly = true;

    // PHP 7.3+ pode usar 'samesite' em session_set_cookie_params
    $cookieParams = session_get_cookie_params();
    $cookieParams['httponly'] = $httponly;
    $cookieParams['secure'] = $secure;
    // Use Lax por compatibilidade; se estiver em HTTPS e quiser mais restrição, use 'Strict'
    $samesite = 'Lax';

    // Definir manualmente cookie com SameSite para versões do PHP que não suportam o parâmetro diretamente
    if (PHP_VERSION_ID >= 70300) {
        session_set_cookie_params([
            'lifetime' => $cookieParams['lifetime'],
            'path' => $cookieParams['path'],
            'domain' => $cookieParams['domain'],
            'secure' => $cookieParams['secure'],
            'httponly' => $cookieParams['httponly'],
            'samesite' => $samesite
        ]);
    } else {
        session_set_cookie_params(
            $cookieParams['lifetime'],
            $cookieParams['path'] . '; samesite=' . $samesite,
            $cookieParams['domain'],
            $cookieParams['secure'],
            $cookieParams['httponly']
        );
    }

    // Tighten session handling
    ini_set('session.use_strict_mode', '1');
    ini_set('session.cookie_httponly', $httponly ? '1' : '0');
    ini_set('session.cookie_secure', $secure ? '1' : '0');

    session_start();
}

/**
 * Retorna o token CSRF gerado na sessão (gera se não existir).
 */
function get_csrf_token()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        secure_session_start();
    }

    if (empty($_SESSION['csrf_token'])) {
        // 32 bytes = 64 hex chars
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

/**
 * Valida um token CSRF recebido comparando com o da sessão.
 */
function validate_csrf_token($token)
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        secure_session_start();
    }

    if (empty($token) || empty($_SESSION['csrf_token'])) {
        return false;
    }

    return hash_equals($_SESSION['csrf_token'], $token);
}

?>