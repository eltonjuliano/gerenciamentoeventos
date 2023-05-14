<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <form action="salvar_usuario.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div><p><a href="index.php">Voltar ao Menu</a></p>

</body>
</html>
