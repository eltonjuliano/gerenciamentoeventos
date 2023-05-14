<!DOCTYPE html>
<html>
<head>
    <title>Novo Fornecedor</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Novo Fornecedor</h1>
        <form action="salvar_fornecedor.php" method="POST">
            <label for="tipo">Tipo do Fornecedor:</label>
            <input type="text" name="tipo" id="tipo" required>
            
            <label for="nome">Nome do Fornecedor:</label>
            <input type="text" name="nome" id="nome" required>
            
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>
            
            <label for="contato">Contato:</label>
            <input type="text" name="contato" id="contato" required>
            
            <label for="faixa_preco">Faixa de Preço:</label>
            <input type="text" name="faixa_preco" id="faixa_preco" required>

            <input type="submit" value="Salvar">
        </form>
        <p><a href="lista_fornecedores.php">Voltar a Lista de fornecedores</a></p>
        <p><a href="index.php">Voltar ao Menu Principal</a></p>
    </div>
</body>
</html>
