<?php
// Simulando dados de contribuições (em produção, viria do banco de dados)
$contribuicoes = [
    ['nome' => 'João Silva', 'tipo' => 'Doação', 'valor' => 'R$ 100,00', 'data' => '15/11/2025'],
    ['nome' => 'Maria Santos', 'tipo' => 'Voluntariado', 'valor' => '8 horas', 'data' => '14/11/2025'],
    ['nome' => 'Carlos Oliveira', 'tipo' => 'Doação', 'valor' => 'R$ 250,00', 'data' => '13/11/2025'],
    ['nome' => 'Ana Costa', 'tipo' => 'Voluntariado', 'valor' => '5 horas', 'data' => '12/11/2025'],
    ['nome' => 'Pedro Gomes', 'tipo' => 'Doação', 'valor' => 'R$ 50,00', 'data' => '11/11/2025'],
];

$estadisticas = [
    'doadores' => 324,
    'voluntarios' => 87,
    'totalArrecadado' => 'R$ 45.320,00'
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contribuicoes.css">
    <link href="/Maos_Que_Ajudam/public/css/style.css" rel="stylesheet">
    <title>Contribuições - Mãos Que Ajudam</title>
</head>
<body>
    
    <?php include __DIR__ . '/../components/header.php'; ?>

    <main class="container mt-5">
        <!-- Seção Hero -->
        <section class="hero-contribuicoes text-center mb-5">
            <h1 class="display-4 fw-bold text-primary mb-3">
                <i class="fas fa-heart"></i> Suas Contribuições Fazem Diferença
            </h1>
            <p class="lead text-muted">
                Junte-se a nossa comunidade de doadores e voluntários que transformam vidas todos os dias.
            </p>
        </section>

        <!-- Estatísticas -->
        <section class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card stats-card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-user-heart stats-icon text-success"></i>
                        <h3 class="card-title mt-3"><?php echo $estadisticas['doadores']; ?></h3>
                        <p class="card-text text-muted">Doadores Ativos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card stats-card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-hands-helping stats-icon text-info"></i>
                        <h3 class="card-title mt-3"><?php echo $estadisticas['voluntarios']; ?></h3>
                        <p class="card-text text-muted">Voluntários Registrados</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card stats-card text-center h-100">
                    <div class="card-body">
                        <i class="fas fa-coins stats-icon text-warning"></i>
                        <h3 class="card-title mt-3"><?php echo $estadisticas['totalArrecadado']; ?></h3>
                        <p class="card-text text-muted">Total Arrecadado</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formas de Contribuir -->
        <section class="mb-5">
            <h2 class="text-center fw-bold mb-4">
                <i class="fas fa-lightbulb"></i> Formas de Contribuir
            </h2>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="contribuicao-card">
                        <div class="contribuicao-icon bg-success">
                            <i class="fas fa-donate"></i>
                        </div>
                        <h4>Doação Financeira</h4>
                        <p>Contribua com qualquer valor e ajude diretamente nossas iniciativas sociais.</p>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDoacao">
                            Fazer Doação <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="contribuicao-card">
                        <div class="contribuicao-icon bg-info">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Voluntariado</h4>
                        <p>Doe seu tempo e habilidades para potencializar nosso trabalho.</p>
                        <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalVoluntario">
                            Se Voluntariar <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="contribuicao-card">
                        <div class="contribuicao-icon bg-warning">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4>Doação de Materiais</h4>
                        <p>Doe roupas, alimentos, livros e outros itens necessários.</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalMaterial">
                            Contribuir <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="contribuicao-card">
                        <div class="contribuicao-icon bg-danger">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h4>Divulgar</h4>
                        <p>Compartilhe nossa causa nas redes sociais e amplie nosso alcance.</p>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDivulgar">
                            Divulgar <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contribuições Recentes -->
        <section class="mb-5">
            <h2 class="text-center fw-bold mb-4">
                <i class="fas fa-list-check"></i> Contribuições Recentes
            </h2>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th><i class="fas fa-user"></i> Contribuidor</th>
                            <th><i class="fas fa-tag"></i> Tipo</th>
                            <th><i class="fas fa-money-bill"></i> Valor/Horas</th>
                            <th><i class="fas fa-calendar"></i> Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contribuicoes as $contribuicao): ?>
                            <tr>
                                <td class="fw-bold"><?php echo htmlspecialchars($contribuicao['nome']); ?></td>
                                <td>
                                    <?php if ($contribuicao['tipo'] === 'Doação'): ?>
                                        <span class="badge bg-success">
                                            <i class="fas fa-donate"></i> <?php echo $contribuicao['tipo']; ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-info">
                                            <i class="fas fa-handshake"></i> <?php echo $contribuicao['tipo']; ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo htmlspecialchars($contribuicao['valor']); ?></td>
                                <td class="text-muted"><?php echo htmlspecialchars($contribuicao['data']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Chamada para Ação Final -->
        <section class="cta-section text-center py-5 ">
            <h3 class="fw-bold mb-3">Pronto para fazer a diferença?</h3>
            <p class="lead mb-4">Cada pequena ação tem um grande impacto</p>
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalDoacao">
                <i class="fas fa-heart text-light">Contribua Agora</i> 
            </button>
        </section>
    </main>

    <!-- Modal Doação -->
    <div class="modal fade" id="modalDoacao" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="fas fa-donate"></i> Doação Financeira</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Seu Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Valor da Doação (R$)</label>
                            <input type="number" class="form-control" min="1" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Método de Pagamento</label>
                            <select class="form-select" required>
                                <option selected disabled>Selecione...</option>
                                <option>Cartão de Crédito</option>
                                <option>PIX</option>
                                <option>Transferência Bancária</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="anonimo">
                            <label class="form-check-label" for="anonimo">
                                Doação Anônima
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check"></i> Confirmar Doação
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Voluntariado -->
    <div class="modal fade" id="modalVoluntario" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title"><i class="fas fa-handshake"></i> Se Voluntariar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Seu Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Área de Interesse</label>
                            <select class="form-select" required>
                                <option selected disabled>Selecione...</option>
                                <option>Educação</option>
                                <option>Saúde</option>
                                <option>Alimentação</option>
                                <option>Administrativo</option>
                                <option>Comunicação</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Disponibilidade Semanal (horas)</label>
                            <input type="number" class="form-control" min="1" max="40" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info text-white">
                            <i class="fas fa-check"></i> Registrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Doação Material -->
    <div class="modal fade" id="modalMaterial" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title"><i class="fas fa-box"></i> Doação de Materiais</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Seu Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de Material</label>
                            <select class="form-select" required>
                                <option selected disabled>Selecione...</option>
                                <option>Roupas</option>
                                <option>Alimentos</option>
                                <option>Livros</option>
                                <option>Medicamentos</option>
                                <option>Produtos de Higiene</option>
                                <option>Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição da Doação</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-check"></i> Prosseguir
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Divulgar -->
    <div class="modal fade" id="modalDivulgar" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="fas fa-share-alt"></i> Ajude a Divulgar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Compartilhe nossa causa nas redes sociais:</p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary">
                            <i class="fab fa-facebook"></i> Compartilhar no Facebook
                        </a>
                        <a href="#" class="btn btn-info text-white">
                            <i class="fab fa-twitter"></i> Compartilhar no Twitter
                        </a>
                        <a href="#" class="btn btn-success">
                            <i class="fab fa-whatsapp"></i> Compartilhar no WhatsApp
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fab fa-instagram"></i> Seguir no Instagram
                        </a>
                    </div>
                    <hr class="my-3">
                    <p class="small text-muted">Use as hashtags: #MãosQueAjudam #AjudeSocial #Voluntariado</p>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>