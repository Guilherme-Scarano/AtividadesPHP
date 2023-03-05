<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="tformulario">
    <h1>Gerador de Retângulos</h1>
    <form action="saida.php" method="POST">
    <label for="border-color">Cor da borda:</label>
		<select name="border-color" id="border-color">
			<option value="black">Preto</option>
			<option value="red">Vermelho</option>
			<option value="blue">Azul</option>
			<option value="green">Verde</option>
			<option value="yellow">Amarelo</option>
		</select>
		<br>
		<label for="fill-color">Cor do preenchimento:</label>
		<select name="fill-color" id="fill-color">
			<option value="white">Branco</option>
			<option value="black">Preto</option>
			<option value="red">Vermelho</option>
			<option value="blue">Azul</option>
			<option value="green">Verde</option>
			<option value="yellow">Amarelo</option>
		</select>
		<br>
		<label for="border-char">Caractere da borda:</label>
		<input type="text" name="border-char" id="border-char" value=" ">
		<br>
		<label for="fill-char">Caractere de preenchimento:</label>
		<input type="text" name="fill-char" id="fill-char" value=" ">
		<br>
		<label for="width">Largura:</label>
		<input type="number" name="width" id="width" value="10" min="1">
		<br>
		<label for="height">Altura:</label>
		<input type="number" name="height" id="height" value="10" min="1">
		<br>
		<input type="submit" value="Gerar">
    </form>
    </div>
</body>
</html>