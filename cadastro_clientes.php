<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="salvar_cliente.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required><br>

            <label for="telefone">Telefone de Contato:</label>
            <input type="text" id="telefone" name="telefone" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Cadastrar Cliente">
        </form>
    </div><p><a href="index.php">Voltar ao Menu</a></p>

</body>
</html>
