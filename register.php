<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                <div class="card card-body mt-5">
                    <h3 class="text-center">Cadastro</h3>
                    <form action="register_logic.php" method="POST">
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="exemplo@email.com" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="********" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control"
                                placeholder="********" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="login.php" class="text-secondary">Já possui uma conta? Faça login.</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="index.php" class="text-secondary">Voltar para a Tela Inicial</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>