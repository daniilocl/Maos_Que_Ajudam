<?php
// public/pages/projetos.php
// Array de projetos de exemplo
$projetos = [
    [
        'id' => 1,
        'titulo' => 'Site Corporativo',
        'descricao' => 'Site responsivo para empresa de tecnologia com portfolio e blog integrado.',
        'categoria' => 'Web Design',
        'status' => 'Concluído',
        'imagem' => 'https://via.placeholder.com/300x200?text=Site+Corporativo',
        'data' => '2024-01-15',
        'tecnologias' => ['HTML', 'CSS', 'JavaScript', 'PHP']
    ],
    [
        'id' => 2,
        'titulo' => 'App Gerenciamento de Tarefas',
        'descricao' => 'Aplicação web para gerenciar tarefas do dia a dia com banco de dados.',
        'categoria' => 'Desenvolvimento',
        'status' => 'Em Progresso',
        'imagem' => 'https://via.placeholder.com/300x200?text=App+Tarefas',
        'data' => '2024-02-20',
        'tecnologias' => ['PHP', 'MySQL', 'Bootstrap', 'AJAX']
    ],
    [
        'id' => 3,
        'titulo' => 'Sistema de Vendas',
        'descricao' => 'Sistema completo de vendas com relatórios e gerenciamento de estoque.',
        'categoria' => 'Desenvolvimento',
        'status' => 'Concluído',
        'imagem' => 'https://via.placeholder.com/300x200?text=Sistema+Vendas',
        'data' => '2024-03-10',
        'tecnologias' => ['PHP', 'MySQL', 'jQuery', 'Bootstrap']
    ],
    [
        'id' => 4,
        'titulo' => 'Landing Page Startup',
        'descricao' => 'Landing page moderna e responsiva para startup de inovação tecnológica.',
        'categoria' => 'Web Design',
        'status' => 'Concluído',
        'imagem' => 'https://via.placeholder.com/300x200?text=Landing+Page',
        'data' => '2024-04-05',
        'tecnologias' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap']
    ],
    [
        'id' => 5,
        'titulo' => 'Dashboard Administrativo',
        'descricao' => 'Painel administrativo com gráficos, estatísticas e gerenciamento de usuários.',
        'categoria' => 'Desenvolvimento',
        'status' => 'Em Progresso',
        'imagem' => 'https://via.placeholder.com/300x200?text=Dashboard',
        'data' => '2024-05-12',
        'tecnologias' => ['PHP', 'MySQL', 'Chart.js', 'Bootstrap']
    ],
    [
        'id' => 6,
        'titulo' => 'Plataforma E-commerce',
        'descricao' => 'Plataforma de comércio eletrônico com carrinho de compras e integração de pagamento.',
        'categoria' => 'Desenvolvimento',
        'status' => 'Em Progresso',
        'imagem' => 'https://via.placeholder.com/300x200?text=E-commerce',
        'data' => '2024-06-08',
        'tecnologias' => ['PHP', 'MySQL', 'Stripe API', 'Bootstrap']
    ]
];

// Filtrar por categoria se selecionada
$categoriaSelecionada = isset($_GET['categoria']) ? $_GET['categoria'] : 'todas';
if ($categoriaSelecionada !== 'todas') {
    $projetos = array_filter($projetos, function($projeto) use ($categoriaSelecionada) {
        return $projeto['categoria'] === $categoriaSelecionada;
    });
}

// Obter categorias únicas
$categorias = array_unique(array_map(function($p) { return $p['categoria']; }, $projetos));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="/Maos_Que_Ajudam/public/css/projetos.css" rel="stylesheet">
    <title>Projetos - Mãos que Ajudam</title>
</head>
<body>
    <?php include __DIR__ . '/../components/header.php'; ?>

    <main class="container mt-5 mb-5">
        <!-- Seção de Título -->
        <section class="texto-hero mb-5">
            <div class="text-center">
                <h1 class="titulo-principal">Nossos Projetos</h1>
                <p class="subtitulo">Conheça os projetos que desenvolvemos com paixão e dedicação</p>
            </div>
        </section>

        <!-- Filtros -->
        <section class="mb-5">
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <a href="?categoria=todas" class="btn btn-filtro <?php echo ($categoriaSelecionada === 'todas') ? 'btn-filtro-ativo' : ''; ?>">
                    <i class="fas fa-list me-2"></i>Todos
                </a>
                <?php foreach($categorias as $cat): ?>
                    <a href="?categoria=<?php echo urlencode($cat); ?>" class="btn btn-filtro <?php echo ($categoriaSelecionada === $cat) ? 'btn-filtro-ativo' : ''; ?>">
                        <i class="fas fa-tag me-2"></i><?php echo htmlspecialchars($cat); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Grid de Projetos -->
        <section>
            <?php if(count($projetos) > 0): ?>
                <div class="row g-4">
                    <?php foreach($projetos as $projeto): ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card projeto-card h-100">
                                <!-- Imagem do Projeto -->
                                <div class="projeto-imagem-container">
                                    <img src="<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                                         class="card-img-top projeto-imagem" 
                                         alt="<?php echo htmlspecialchars($projeto['titulo']); ?>">
                                    <div class="overlay-projeto">
                                        <a href="#projeto-<?php echo $projeto['id']; ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye me-2"></i>Ver Detalhes
                                        </a>
                                    </div>
                                    <span class="badge-status badge-<?php echo strtolower(str_replace(' ', '-', $projeto['status'])); ?>">
                                        <?php echo $projeto['status']; ?>
                                    </span>
                                </div>

                                <!-- Conteúdo do Card -->
                                <div class="card-body d-flex flex-column">
                                    <!-- Categoria -->
                                    <span class="badge bg-secondary mb-2 align-self-start">
                                        <?php echo htmlspecialchars($projeto['categoria']); ?>
                                    </span>

                                    <!-- Título -->
                                    <h5 class="card-title mb-2"><?php echo htmlspecialchars($projeto['titulo']); ?></h5>

                                    <!-- Descrição -->
                                    <p class="card-text text-muted flex-grow-1">
                                        <?php echo htmlspecialchars($projeto['descricao']); ?>
                                    </p>

                                    <!-- Tecnologias -->
                                    <div class="tecnologias mb-3">
                                        <?php foreach($projeto['tecnologias'] as $tech): ?>
                                            <span class="badge badge-tecnologia">
                                                <i class="fas fa-code me-1"></i><?php echo htmlspecialchars($tech); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Rodapé do Card -->
                                <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>
                                        <?php echo date('d/m/Y', strtotime($projeto['data'])); ?>
                                    </small>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info text-center" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    Nenhum projeto encontrado nesta categoria.
                </div>
            <?php endif; ?>
        </section>

        <!-- CTA Seção -->
        <section class="mt-5 pt-5 text-center cta-section">
            <h2>Tem um projeto em mente?</h2>
            <p class="mb-4">Entre em contato conosco e vamos transformar suas ideias em realidade</p>
            <a href="/contato" class="btn btn-primary btn-lg">
                <i class="fas fa-envelope me-2"></i>Solicitar Orçamento
            </a>
        </section>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animação de entrada dos cards
        document.querySelectorAll('.projeto-card').forEach((card, index) => {
            card.style.opacity = '0';
            card.style.animation = `fadeInUp 0.6s ease forwards ${index * 0.1}s`;
        });
    </script>
</body>
</html>