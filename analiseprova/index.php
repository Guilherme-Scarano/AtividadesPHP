<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="tformulario">
    <h1>Análise de Provas</h1>
    <form action="saida.php" method="POST">
    <label for="valorProva1">Valor total da Prova 1:</label>
		<input type="number" id="valorProva1" name="valorProva1" required><br>

		<label for="valorProva2">Valor total da Prova 2:</label>
		<input type="number" id="valorProva2" name="valorProva2" required><br>

		<label for="notaProva1">Nota da Prova 1:</label>
		<input type="number" id="notaProva1" name="notaProva1" required><br>

		<label for="notaProva2">Nota da Prova 2:</label>
		<input type="number" id="notaProva2" name="notaProva2" required><br>

		<input type="submit" value="Gerar Análise">
    </form>
    </div>
</body>
</html>