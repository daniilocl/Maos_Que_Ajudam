<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h2 class="mb-4">Editar Usuário</h2>

    <form method="POST" action="/Maos_Que_Ajudam/src/controllers/atualizar_usuario.php">

        <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?= $usuario['nome'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $usuario['email'] ?>" required>
        </div>

        <div class="mb-3">
            <label>Nível de Acesso</label>
            <select name="tipo_usuario" class="form-select">
                <option value="admin" <?= $usuario['tipo_usuario'] === 'admin' ? 'selected' : '' ?>>Administrador</option>
                <option value="padrao" <?= $usuario['tipo_usuario'] === 'padrao' ? 'selected' : '' ?>>Padrão</option>
                <option value="voluntario" <?= $usuario['tipo_usuario'] === 'voluntario' ? 'selected' : '' ?>>Voluntário</option>
            </select>
        </div>

        <button class="btn btn-primary">Salvar Alterações</button>
        <a href="/Maos_Que_Ajudam/src/views/administracao.php" class="btn btn-secondary">Cancelar</a>

    </form>

</body>
</html>