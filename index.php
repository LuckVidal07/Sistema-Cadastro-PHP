<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="d-flex h-100 text-center text-bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <header class="mb-auto">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <span class="h4 mb-2 mb-lg-0 me-3 link-light text-decoration-none">
                        Sistema de Cadastro
                    </span>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link px-2 link-secondary">Cadastrar</a></li>
                    <li><a class="nav-link px-2 link-light">Visualizar Dados</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="px-3 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h1 class="text-white mb-4">Cadastro de Pessoas</h1>

                <div class="form-cadastro-fundo">
                    <div id="resultado-cadastro" class="mb-3"></div>

                    <form action="cadastro_script.php" method="post">
                        <div class="form-group mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg" id="btn-submit-cadastro">
                                <span id="text-submit">Cadastrar Pessoa</span>
                                <span id="spinner" class="d-none">
                                     <span class="spinner-border spinner-border-sm" role="status"
                                           aria-hidden="true"></span>
                                        Processando...
                                     </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </main>

    <footer class="mt-auto text-white-50">
        <p>Sistema de Cadastro &copy; 2025</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
<script src="assets/js/cadastro.js" defer></script>
</body>
</html>