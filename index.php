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
        <form action="processar.php" method="POST">
            <p>Nome:</p>
            <input type="text" name="nome" class="campotexto" placeholder="Digite seu nome...">
            <p>Email:</p>
            <input type="text" name="email" class="campotexto" placeholder="Digite seu Email...">
            <p>Telefone:</p>
            <input type="text" name="telefone" class="campotexto" placeholder="Digite seu Telefone...">
            <button id="botaoCadastro" class="bot">Cadastrar</button>
        </form>
    </div>
</body>
</html>