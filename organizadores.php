<!DOCTYPE html>
<html>
<head>
    <title>Organização de Eventos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Organização de Eventos</h1>
        <form action="salvar_evento.php" method="post">
            <label for="local">Local:</label>
            <input type="text" id="local" name="local" required><br>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required><br>

            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required><br>

            <label for="numero_pessoas">Número de Pessoas:</label>
            <input type="number" id="numero_pessoas" name="numero_pessoas" required><br>

            <label for="custo">Custo:</label>
            <input type="text" id="custo" name="custo" required><br>

            <label for="anotacoes">Anotações:</label>
            <textarea id="anotacoes" name="anotacoes"></textarea><br>

            <input type="submit" value="Salvar Evento">
        </form>
    </div><p><a href="index.php">Voltar ao Menu</a></p>
</body>
</html>
