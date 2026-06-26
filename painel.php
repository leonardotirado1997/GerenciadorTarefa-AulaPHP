<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light rounded-3 px-3 mt-3">
            <a class="navbar-brand fw-semibold" href="painel.php">Crud PHP</a>
            <form action="logout.php" method="POST" class="d-inline">
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </nav>
        <!-- Session Message -->
        <?php if (isset($_SESSION['message']) && isset($_SESSION['message_type'])): ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show"
                role="alert">
                <?= $_SESSION['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        endif ?>
        <!--/Session Message -->
        <main class="container py-4">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <!-- Formulário -->
                    <div class="card card-body">
                        <form action="save.php" method="POST">
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control"
                                    placeholder="Titulo da tarefa" autofocus required>
                            </div>
                            <div class="mb-3">
                                <textarea name="description" rows="2" class="form-control" placeholder="Descrição"></textarea>
                            </div>
                            <input type="submit" name="salvar" class="btn btn-success w-100"
                                value="Salvar Tarefa">
                        </form>
                    </div>
                </div>
                <!-- /Formulário -->

                <!-- Tabela de Tarefas -->
                <div class="col-12 col-lg-8">
                    <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>Cód</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Criado em</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'conn.php';

                            $query = "SELECT id, title, description, created_at 
                            FROM tasks";
                            $result = $conn->query($query);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                    </div>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?= substr($row['description'], 0, 20) . '...' ?></td>
                                        <td><?= date("d/m/Y", strtotime($row['created_at'])); ?></td>
                                        <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-secondary">
                                                <i class="fas fa-marker"></i>
                                            </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6R3kK2u6G5bNf2rYf7S7yB2Jm9JwHf1wYf5v5V5Q2t1QX6f5q3j5Y5p4YfQ2k0v" crossorigin="anonymous"></script>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='5'>Nenhuma tarefa encontrada!</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /Tabela de Tarefas -->
            </div>
        </main>
    </div>

    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        // Timer para esconder a session message
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 1500);
    </script>
</body>

</html>