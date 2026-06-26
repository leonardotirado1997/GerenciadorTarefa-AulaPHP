<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once 'conn.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    echo "ID da tarefa não fornecido!";
    $_SESSION['message'] = "ID da tarefa não fornecido.";
    $_SESSION['message_type'] = "danger";
    header('Location: painel.php');
    exit();
}

try {
    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $task = $result->fetch_assoc();
        } else {
            echo "Tarefa não encontrada!";
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Erro ao preparar a consulta";
        $_SESSION['message_type'] = "danger";
        header('Location: painel.php');
        exit();
    }
} catch (Exception $e) {
    echo "Erro " . $e->getMessage();
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="painel.php">Crud PHP</a>
                <form action="logout.php" method="POST" class="d-inline">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </nav>

        <div class="container p-4">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 mx-auto">
                    <div class="card card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                            <div class="mb-3">
                                <input type="text" name="title" class="form-control" value="<?php echo $task['title']; ?>">
                            </div>
                            <div class="mb-3">
                                <textarea name="description" rows="2" class="form-control"><?php echo $task['description']; ?></textarea>
                            </div>
                            <button class="btn btn-success w-100 mb-2" type="submit">Atualizar</button>
                            <a href="painel.php" class="btn btn-secondary w-100">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP 4 SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>