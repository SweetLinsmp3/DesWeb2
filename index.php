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
        <!--formulario para entrada de dados-->
        <form method="POST">
            <!--nome-->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="campotexto" placeholder="Digite seu nome...">

            <!--email-->
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="campotexto" placeholder="Digite seu Email...">

            <!--telefone-->
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="campotexto" placeholder="Digite seu Telefone...">
            <button id="botaoCadastro" class="bot">Cadastrar</button>
        </form>

    <?php
    //verifica se o formulario foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Recebe os dados do formulario
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

     // Obtém a conexão configurada no Render
    $databaseUrl = getenv("DATABASE_URL");
    // Conecta ao PostgreSQL
    $conexao = pg_connect($databaseUrl);
    // Salva o e-mail no banco
    pg_query_params(
     $conexao,
     "INSERT INTO usuarios (nome,email,telefone) VALUES ($1, $2, $3)",
     array($nome,$email,$telefone)
    );

    //mostra os dados recebidos
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";

    echo "<script>
    
    alert('Cadastro realizado com sucesso!');
    window.location.href = 'index.php';

    </script>";
        
    }


    ?>

    </div>
</body>
</html>
