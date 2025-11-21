<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Iniciativas | [Nome da ONG]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="projetos.css">
    <link href="/Maos_Que_Ajudam/public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>  

    <?php include __DIR__ . '/../components/header.php'; ?>

    <main class="container">

        <section class="filtro-acoes">
            <p><strong>Filtre por Área:</strong></p>
            <div class="botoes-filtro">
                <button class="btn-filtro active" data-categoria="todos"><i class="fas fa-list"></i> Todos</button>
                <button class="btn-filtro educacao" data-categoria="educacao"><i class="fas fa-graduation-cap"></i> Educação</button>
                <button class="btn-filtro saude" data-categoria="saude"><i class="fas fa-heartbeat"></i> Saúde</button>
                <button class="btn-filtro acolhimento" data-categoria="acolhimento"><i class="fas fa-home"></i> Acolhimento</button>
                <button class="btn-filtro digital" data-categoria="digital"><i class="fas fa-laptop"></i> Digital</button>
            </div>
        </section>

        <div class="tabela-projetos">

            <div class="cabecalho-tabela">
                <div>PROJETO</div>
                <div>ÁREA</div>
                <div>STATUS</div>
                <div>AÇÃO</div>
            </div>

            <div class="linha-projeto educacao">
                <div class="titulo-projeto">Monitoria Colaborativa Digital</div>
                <div class="area-projeto area-educacao"><i class="fas fa-graduation-cap"></i> Educação</div>
                <div class="status-projeto status-urgente">Em Ação</div>
                <div class="acao-projeto"><a href="#monitoria" class="btn-detalhe">Saiba Mais</a></div>
            </div>

            <div class="linha-projeto saude">
                <div class="titulo-projeto">Campanha Sorriso Saudável</div>
                <div class="area-projeto area-saude"><i class="fas fa-heartbeat"></i> Saúde</div>
                <div class="status-projeto status-concluido">Concluído (Relatório)</div>
                <div class="acao-projeto"><a href="#sorriso" class="btn-detalhe">Ver Relatório</a></div>
            </div>

            <div class="linha-projeto acolhimento">
                <div class="titulo-projeto">Reforma do Espaço Aconchego</div>
                <div class="area-projeto area-acolhimento"><i class="fas fa-home"></i> Acolhimento</div>
                <div class="status-projeto status-urgente">Necessita Doações</div>
                <div class="acao-projeto"><a href="#reforma" class="btn-detalhe cta-principal">Doar Agora</a></div>
            </div>

            <div class="linha-projeto digital">
                <div class="titulo-projeto">Oficina de Inclusão Digital Jovem</div>
                <div class="area-projeto area-digital"><i class="fas fa-laptop"></i> Digital</div>
                <div class="status-projeto status-aberto">Inscrições Abertas</div>
                <div class="acao-projeto"><a href="#digital" class="btn-detalhe">Inscrever-se</a></div>
            </div>

            <div class="linha-projeto educacao">
                <div class="titulo-projeto">Projeto Mochila do Saber</div>
                <div class="area-projeto area-educacao"><i class="fas fa-graduation-cap"></i> Educação</div>
                <div class="status-projeto status-aberto">Precisa Voluntários</div>
                <div class="acao-projeto"><a href="#mochila" class="btn-detalhe">Quero Ajudar</a></div>
            </div>

            <div class="linha-projeto saude">
                <div class="titulo-projeto">Cozinha Solidária Semanal</div>
                <div class="area-projeto area-saude"><i class="fas fa-heartbeat"></i> Saúde</div>
                <div class="status-projeto status-urgente">Em Ação</div>
                <div class="acao-projeto"><a href="#cozinha" class="btn-detalhe cta-principal">Doe Alimentos</a></div>
            </div>

        </div>

    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script>
        document.querySelectorAll('.btn-filtro').forEach(button => {
            button.addEventListener('click', () => {
                const categoria = button.getAttribute('data-categoria');

                // Remove 'active' de todos os botões e adiciona ao clicado
                document.querySelectorAll('.btn-filtro').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filtra as linhas da tabela
                document.querySelectorAll('.linha-projeto').forEach(linha => {
                    if (categoria === 'todos' || linha.classList.contains(categoria)) {
                        linha.style.display = 'grid';
                    } else {
                        linha.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>

</html>