<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <div class="entrada">
        <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            echo "<p style='color: green; font-weight: bold;'>Cadastro realizado com sucesso!</p>";
            echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
            echo "<p>Email: " . htmlspecialchars($email) . "</p>";
            echo "<p>Telefone: " . htmlspecialchars($telefone) . "</p>";
        ?>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>