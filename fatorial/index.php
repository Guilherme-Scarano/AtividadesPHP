<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="tformulario">
    <h1>Calcular o fatorial de um número</h1>
    <form action="saida.php" method="POST">
        <label>Digite um número inteiro:</label>
        <input type="number" required="required" name="num" size="40">
        <input type="submit" value="Confirmar" class="botao"/>
    </form>
    </div>
</body>
</html>