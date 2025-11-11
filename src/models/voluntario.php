<?php
// Inclui conexão usando caminho relativo
include __DIR__ . '/../db/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idVol = mysqli_real_escape_string($conn, $_POST['idVol']);
    $nome  = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cpf   = mysqli_real_escape_string($conn, $_POST['cpf']);

    $sql = "INSERT INTO Voluntario (idVol, nome, email, cpf) 
            VALUES ('$idVol', '$nome', '$email', '$cpf')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Novo registro inserido com sucesso!";
    } else {
        echo "❌ Erro ao inserir registro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit; // Evita que HTML ou outro código seja carregado
}
?>