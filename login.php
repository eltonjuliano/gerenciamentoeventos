<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="autenticar.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Entrar">
        </form>
    </div><p><a href="index.php">Voltar ao Menu</a></p>

</body>
</html>