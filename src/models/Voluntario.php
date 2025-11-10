<?php

include 'conexao.php';

class Voluntario{
    private $conn;
    private $idVol; private $nome; private $email; private $cpf;
}

$maos_que_ajudam = new Voluntario();

$maos_que_ajudam->usuario = $_POST;
$maos_que_ajudam->funcionario = $_POST;
$maos_que_ajudam->professor = $_POST;
$maos_que_ajudam->beneficiario = $_POST;
$maos_que_ajudam->voluntario = $_POST;
$maos_que_ajudam->curso = $_POST;
$maos_que_ajudam->patrocinador = $_POST;
$maos_que_ajudam->doacoes = $_POST;

$sql = "INSERT INTO Voluntario (idVol, nome, email, cpf) VALUES '$maos_que_ajudam->usuario', '$maos_quea_ajudam->funcionario', '$maos_que_ajudam->professor', '$maos_que_ajudam->beneficiario', '$maos_que_ajudam->voluntario, '$maos_que_ajudam->curso', '$maos_que_ajudam->patrocinador', '$maos_que_ajudam->doacoes')";

if (mysql_query($conn, $sql)){
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro" . mysqli_error($conn);
}

?>