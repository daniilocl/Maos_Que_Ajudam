<?php
// models/Usuario.php

class Usuario {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Cadastra um novo usuário com tipo_usuario='cliente'.
     * Adicionando 'nome' e 'cpf' que estão no formulário.
     */
    public function cadastrarUsuario($nome, $cpf, $email, $senha) { // <-- Recebe nome e cpf
        $tipo_padrao = 'cliente'; 
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Prepared Statement: 5 colunas
        $sql = "INSERT INTO Usuario (nome, cpf, email, senha, tipo_usuario) VALUES (?, ?, ?, ?, ?)"; // <-- 5 placeholders
        $stmt = mysqli_prepare($this->conn, $sql);
        
        if (!$stmt) return false;

        // Liga 5 parâmetros: 'sssss' -> 5 strings
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $cpf, $email, $senha_hash, $tipo_padrao); // <-- Liga 5 variáveis

        $result = mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);
        
        return $result;
    }

    // ... (Método buscarPorEmail permanece inalterado, mas deve buscar o nome e o cpf se quiser usar na sessão)
    public function buscarPorEmail($email) {
        // Mantenha essa query para buscar dados necessários ao login
        $sql = "SELECT id, nome, senha, tipo_usuario FROM usuarios WHERE email = ?"; 
        $stmt = mysqli_prepare($this->conn, $sql);
        
        if (!$stmt) return null;
        
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        $usuario = mysqli_fetch_assoc($result);
        
        mysqli_stmt_close($stmt);
        
        return $usuario;
    }
}