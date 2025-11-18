<?php
// models/Usuario.php

class Usuario {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Cadastra um novo usuário com tipo_usuario='cliente'.
     * Retorna o ID do novo usuário em caso de sucesso ou false em caso de falha.
     */
    public function cadastrarUsuario($nome, $cpf, $email, $senha) { 
        if (!$this->conn) {
            error_log("Erro de Conexão no cadastrarUsuario.");
            return false;
        }

        $tipo_padrao = 'cliente'; 
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Usuario (nome, cpf, email, senha, tipo_usuario) VALUES (?, ?, ?, ?, ?)"; 
        $stmt = mysqli_prepare($this->conn, $sql);
        
        if (!$stmt) {
            error_log("Erro ao preparar statement no cadastro: " . mysqli_error($this->conn));
            return false;
        }

        mysqli_stmt_bind_param($stmt, "sssss", $nome, $cpf, $email, $senha_hash, $tipo_padrao);

        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
             // Retorna o ID do novo usuário
            $new_id = mysqli_insert_id($this->conn);
            mysqli_stmt_close($stmt);
            return $new_id;
        } else {
            error_log("Erro ao executar cadastro: " . mysqli_stmt_error($stmt));
            mysqli_stmt_close($stmt);
            return false;
        }
    }

    /**
     * Cadastra um novo usuário com tipo_usuario='voluntario'.
     * Retorna o ID do novo usuário em caso de sucesso ou false em caso de falha.
     */
    public function cadastrarVoluntario($nome, $cpf, $email, $senha) { 
        if (!$this->conn) {
            error_log("Erro de Conexão no cadastrarVoluntario.");
            return false;
        }

        $tipo_voluntario = 'voluntario'; 
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // A inserção é na tabela 'Usuario', não 'Voluntario'
        $sql = "INSERT INTO Usuario (nome, cpf, email, senha, tipo_usuario) VALUES (?, ?, ?, ?, ?)"; 
        $stmt = mysqli_prepare($this->conn, $sql);
        
        if (!$stmt) {
            error_log("Erro ao preparar statement no cadastro de voluntário: " . mysqli_error($this->conn));
            return false;
        }

        mysqli_stmt_bind_param($stmt, "sssss", $nome, $cpf, $email, $senha_hash, $tipo_voluntario);

        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            // NOVO: Retorna o ID do novo usuário
            $new_id = mysqli_insert_id($this->conn);
            mysqli_stmt_close($stmt);
            return $new_id;
        } else {
            // Se falhar, é provável que seja CPF/E-mail duplicado
            error_log("Erro ao executar cadastro de voluntário: " . mysqli_stmt_error($stmt));
            mysqli_stmt_close($stmt);
            return false;
        }
    }

    /**
     * Busca usuário por e-mail para o processo de login.
     * Inclui 'tipo_usuario' para a lógica de redirecionamento.
     */
    public function buscarPorEmail($email) {
        $sql = "SELECT idUsuario, nome, senha, tipo_usuario FROM Usuario WHERE email = ?"; 
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
// Removemos a tag de fechamento para evitar problemas de headers