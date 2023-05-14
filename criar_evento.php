<!DOCTYPE html>
<html>
<head>
    <title>Criar Evento</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Criar Evento</h1>
        <form action="salvar_evento.php" method="post">
            <label for="codigo">Código do Evento:</label>
            <input type="text" id="codigo" name="codigo" required><br>

            <label for="nome">Nome do Evento:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="data_inicio">Data de Início:</label>
            <input type="date" id="data_inicio" name="data_inicio" required><br>

            <label for="data_fim">Data do Fim:</label>
            <input type="date" id="data_fim" name="data_fim" required><br>

            <label for="horario_inicio">Horário de Início:</label>
            <input type="time" id="horario_inicio" name="horario_inicio" required><br>

            <label for="horario_fim">Horário do Fim:</label>
            <input type="time" id="horario_fim" name="horario_fim" required><br>

            <label for="duracao">Duração:</label>
            <input type="text" id="duracao" name="duracao" required><br>

            <label for="local">Local do Evento:</label>
            <input type="text" id="local" name="local" required><br>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required><br>

            <label for="ambiente">Ambiente:</label>
            <select id="ambiente" name="ambiente" required>
                <option value="fechado">Fechado</option>
                <option value="aberto">Aberto</option>
            </select><br>

            <label for="privacidade">Privacidade:</label>
            <select id="privacidade" name="privacidade" required>
                <option value="privado">Privado</option>
                <option value="publico">Público</option>
            </select><br>

            <label for="valor_ingresso">Valor do Ingresso:</label>
            <input type="text" id="valor_ingresso" name="valor_ingresso" required><br>

            <label for="quantidade_pessoas">Quantidade de Pessoas:</label>
            <input type="number" id="quantidade_pessoas" name="quantidade_pessoas" required><br>

            <input type="submit" value="Criar Evento">
        </form>
    </div><p><a href="index.php">Voltar ao Menu</a></p>

</body>
</html>
