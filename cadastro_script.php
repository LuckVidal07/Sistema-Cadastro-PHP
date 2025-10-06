<?php
require_once 'config/conexao.php';
global $conn;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Processando Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-bg-dark">
<div class="container mt-5 text-bg-dark">
    <div class="row">
        <div class="col">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (!$conn) {
                    die("<div class='alert alert-danger'>Falha crítica na conexão com o banco de dados.</div>");
                }

                $nome = $_POST['nome'] ?? null;
                $endereco = $_POST['endereco'] ?? null;
                $telefone = $_POST['telefone'] ?? null;
                $email = $_POST['email'] ?? null;
                $data_nascimento = $_POST['data_nascimento'] ?? null;

                if (empty($nome) || empty($endereco) || empty($telefone) || empty($email) || empty($data_nascimento)) {
                    echo "<div class='alert alert-warning'>Dados obrigatórios. Volte e preencha o formulário.</div>";
                } else {

                    $sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);

                    mysqli_stmt_bind_param($stmt, "sssss", $nome, $endereco, $telefone, $email, $data_nascimento);

                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div class='alert alert-success'>Dados de <strong>$nome</strong> cadastrados com sucesso!</div>";
                    } else {
                        echo "<div class='alert alert-danger'>ERRO ao cadastrar. Verifique a estrutura da tabela.</div>";
                    }
                    mysqli_stmt_close($stmt);
                }

            } else {
                echo "<div class='alert alert-info'>Acesso Inválido. Por favor, use o formulário de cadastro.</div>";
            }
            mysqli_close($conn);
            ?>
            <a href="index.php" class="btn btn-primary mt-3">Voltar ao Cadastro</a>
        </div>
    </div>
</div>
<footer class="text-center text-white-50 bg-dark py-3" style="position: fixed; bottom: 0; width: 100%;">
    <p class="mb-0">Sistema de Cadastro &copy; 2025</p>
</footer>
</body>
</html>