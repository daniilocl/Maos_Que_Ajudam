<?php

function setNotification($tipo, $titulo, $mensagem)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['notification'] = [
        'tipo' => $tipo,
        'titulo' => $titulo,
        'mensagem' => $mensagem
    ];
}

function exibirNotificationSessao()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (isset($_SESSION['notification'])) {
        $notif = $_SESSION['notification'];
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script>
            Swal.fire({
                icon: '<?= htmlspecialchars($notif['tipo']) ?>',
                title: '<?= htmlspecialchars($notif['titulo']) ?>',
                text: '<?= htmlspecialchars($notif['mensagem']) ?>',
                confirmButtonText: 'OK',
                allowOutsideClick: false
            });
        </script>
        <?php
        unset($_SESSION['notification']);
    }
}

?>
