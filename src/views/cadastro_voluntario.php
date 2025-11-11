<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="/Maos_Que_Ajudam/public/css/style.css" rel="stylesheet">
    <title>Cadastro de voluntario</title>
</head>
<body>
    <?php include __DIR__ . '/../db/connection.php'; ?>
    <?php include __DIR__ . '/../components/header.php'; ?>


    <main class="container mt-4">
        <form action="../../src/models/voluntario.php" method="post">
            <label for="idVol">Digite seu id</label>
            <input type="text" name="idVol" id="idVol">

            <label for="idVol">Digite seu nome</label>
            <input type="text" name="nome" id="nome">

            <label for="idVol">Digite seu email</label>
            <input type="text" name="email" id="email">

            <label for="idVol">Digite seu cpf</label>
            <input type="text" name="cpf" id="cpf">

            <button type="submit">Enviar</button>
        </form>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

</body>

</html>