<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Gerenciar Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css"> 
    <style>
        /* Estilos simples para o admin (mantidos para o layout) */
        body { background-color: #f8f9fa; }
        .sidebar { height: 100vh; background-color: #343a40; color: white; }
        .sidebar a { color: white; text-decoration: none; padding: 10px 15px; display: block; }
        .sidebar a:hover { background-color: #495057; }
        /* Destaque para a Tabela */
        .table-responsive { max-height: 70vh; overflow-y: auto; }
        .table thead th { position: sticky; top: 0; background-color: #f8f9fa; z-index: 10; }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <h4 class="text-center py-3 border-bottom">Administração</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"> <a class="nav-link active" href="#usuarios-section"> <i 
                                         class="fas fa-users"></i> Gerenciar Usuários </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="/Maos_Que_Ajudam/index.php"> <i class="fas fa-sign-out-alt"></i>
                                 Sair </a> </li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1 class="mt-4 pb-2 border-bottom">Painel de Administração</h1>

                <section id="usuarios-section" class="pt-4">
                    <h2><i class="fas fa-users"></i> Gerenciar Usuários</h2>
                    <p class="lead">Lista de todos os usuários cadastrados e ferramentas de moderação.</p>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdicionarUsuario">
                            <i class="fas fa-plus-circle"></i> Adicionar Novo Usuário
                        </button>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar por Nome ou Email" aria-label="Buscar">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome Completo</th>
                                    <th>Email</th>
                                    <th>Nível de Acesso</th>
                                    <th>Data de Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>João da Silva (Admin)</td>
                                    <td>joao.admin@maos.com</td>
                                    <td><span class="badge bg-danger">Administrador</span></td>
                                    <td>2023-10-01</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white me-1" data-bs-toggle="modal" data-bs-target="#modalEditarUsuario"><i class="fas fa-edit"></i> Editar</button>
                                        <button class="btn btn-sm btn-warning me-1"><i class="fas fa-lock"></i> Bloquear</button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Excluir</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Maria de Souza</td>
                                    <td>maria@maos.com</td>
                                    <td><span class="badge bg-success">Padrão</span></td>
                                    <td>2024-01-15</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white me-1" data-bs-toggle="modal" data-bs-target="#modalEditarUsuario"><i class="fas fa-edit"></i> Editar</button>
                                        <button class="btn btn-sm btn-warning me-1"><i class="fas fa-lock"></i> Bloquear</button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Excluir</button>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    
                </section>
            </main>
        </div>
    </div>

    <div class="modal fade" id="modalAdicionarUsuario" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Adicionar Novo Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nomeUsuario" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeUsuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailUsuario" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailUsuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="senhaUsuario" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senhaUsuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="nivelAcesso" class="form-label">Nível de Acesso</label>
                            <select class="form-select" id="nivelAcesso" required>
                                <option value="1">Administrador</option>
                                <option value="2" selected>Padrão</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Salvar Usuário</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>