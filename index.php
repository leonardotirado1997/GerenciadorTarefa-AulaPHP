<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster - Organize suas Tarefas com Facilidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
</head>

<body>
    <!-- Navbar simples voltada para conversão (sem links de fuga) -->
    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-tasks text-primary me-2"></i>TaskMaster
            </a>
            <span class="navbar-text d-none d-sm-inline">
                Aumente sua produtividade hoje
            </span>
            <a class="nav-link fw-semibold text-dark" href="login.php">Login</a>
        </div>
    </nav>

    <!-- Hero Section (Captura Principal) -->
    <header class="bg-white py-5 border-bottom">
        <div class="container my-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold text-dark">Gerencie seus projetos sem complicação</h1>
                    <p class="lead text-secondary my-4">Uma forma visual e intuitiva de organizar suas tarefas cotidianas, priorizar entregas e ter controle total sobre o seu tempo. Estilo Kanban, simples e direto ao ponto.</p>
                    
                    <!-- Formulário de Captura de Lead -->
                    <div class="card card-body shadow-sm border-0 bg-light">
                        <form action="capture_lead.php" method="POST">
                            <div class="mb-3">
                                <label for="lead_name" class="fw-bold text-secondary">Seu nome</label>
                                <input type="text" id="lead_name" name="name" class="form-control form-control-lg" placeholder="Ex: Lucas Oliveira" required>
                            </div>
                            <div class="mb-3">
                                <label for="lead_email" class="fw-bold text-secondary">Melhor e-mail profissional</label>
                                <input type="email" id="lead_email" name="email" class="form-control form-control-lg" placeholder="Ex: seuemail@dominio.com" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100 fw-bold">
                                <i class="fas fa-rocket me-2"></i>Quero Acesso Gratuito
                            </button>
                        </form>
                    </div>
                    <small class="text-muted d-block mt-2 text-center">
                        <i class="fas fa-shield-alt me-1"></i> Não enviamos spam. Seus dados estão seguros.
                    </small>
                </div>
                
                <!-- Ilustração/Mockup do Painel -->
                <div class="col-lg-6 text-center">
                    <div class="p-3 bg-light rounded shadow-sm border">
                        <div class="d-flex align-items-center border-bottom pb-2 mb-3">
                            <span class="badge text-bg-primary me-1">●</span>
                            <span class="badge text-bg-warning me-1">●</span>
                            <span class="badge text-bg-success">●</span>
                            <span class="text-muted small ms-3 fw-bold">Visualização do Painel</span>
                        </div>
                        <!-- Representação visual do que ele vai encontrar dentro do app -->
                        <div class="row text-start">
                            <div class="col-12 mb-2">
                                <div class="card card-body p-2 border-start border-4 border-primary shadow-sm">
                                    <h6 class="mb-1 fw-bold">Configurar Servidor AWS EC2</h6>
                                    <p class="small text-muted mb-0">Criar instância, configurar chaves PEM e liberar portas de acesso.</p>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="card card-body p-2 border-start border-4 border-warning shadow-sm">
                                    <h6 class="mb-1 fw-bold">Desenvolver API em Flask</h6>
                                    <p class="small text-muted mb-0">Integrar as rotas de login e o CRUD de tarefas do banco MySQL.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-body p-2 border-start border-4 border-success shadow-sm">
                                    <h6 class="mb-1 fw-bold">Ajustar Estilização da Landing Page</h6>
                                    <p class="small text-muted mb-0">Garantir a consistência visual utilizando o tema Yeti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Benefícios / Funcionalidades -->
    <section class="py-5 bg-light">
        <div class="container text-center my-4">
            <h2 class="fw-bold mb-5">Por que escolher o TaskMaster?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="p-3">
                        <div class="text-primary mb-3">
                            <i class="fas fa-th-large fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Visual Kanban</h4>
                        <p class="text-secondary">Acompanhe o progresso de suas atividades de forma totalmente visual e intuitiva.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3">
                        <div class="text-success mb-3">
                            <i class="fas fa-tachometer-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">Ultra Rápido</h4>
                        <p class="text-secondary">Interface limpa e otimizada construída com foco na máxima performance e agilidade.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-3">
                        <div class="text-warning mb-3">
                            <i class="fas fa-mobile-alt fa-3x"></i>
                        </div>
                        <h4 class="fw-bold">100% Responsivo</h4>
                        <p class="text-secondary">Gerencie seus projetos e adicione tarefas de onde estiver, seja pelo celular ou computador.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé Simples -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0 small">&copy; 2026 TaskMaster. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>