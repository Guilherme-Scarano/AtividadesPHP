<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="tformulario">
    <h1>Gerador de Tabelas</h1>
    <form action="saida.php" method="POST">
	<label for="titulo">Título da Tabela:</label><br>
		<input type="text" id="titulo" name="titulo"><br>

		<label for="espaco">Espaço ocupado pela tabela na página:</label><br>
		<select id="espaco" name="espaco">
			<option value="20">20%</option>
			<option value="40">40%</option>
			<option value="60">60%</option>
			<option value="80">80%</option>
			<option value="100">100%</option>
		</select><br>

		<label for="linhas">Quantidade de linhas:</label><br>
		<input type="number" id="linhas" name="linhas"><br>

		<label for="colunas">Quantidade de colunas:</label><br>
		<input type="number" id="colunas" name="colunas"><br>

		<label for="borda">Tamanho da borda (0 a 9):</label><br>
		<input type="number" id="borda" name="borda" min="0" max="9"><br>

		<label for="cor_fundo">Cor de fundo da tabela:</label><br>
		<select id="cor_fundo" name="cor_fundo">
			<option value="red">Vermelho</option>
			<option value="blue">Azul</option>
			<option value="green">Verde</option>
			<option value="yellow">Amarelo</option>
			<option value="black">Preto</option>
			<option value="white">Branco</option>
		</select><br>

		<label for="cor_texto">Cor do texto da tabela:</label><br>
		<select id="cor_texto" name="cor_texto">
			<option value="red">Vermelho</option>
			<option value="blue">Azul</option>
			<option value="green">Verde</option>
			<option value="yellow">Amarelo</option>
			<option value="black">Preto</option>
			<option value="white">Branco</option>
		</select><br>

		<input type="submit" name="submit" value="Gerar Tabela">

    </form>
    </div>
</body>
</html>