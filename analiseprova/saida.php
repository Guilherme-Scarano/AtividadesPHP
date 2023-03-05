<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="geral">
        <section id="conteudo">
            <table border="0">
                    <td>
                    <td>
                    <?php
                       // Recebe os valores das notas e valores das provas
                       $valorProva1 = $_POST['valorProva1'];
                       $valorProva2 = $_POST['valorProva2'];
                       $notaProva1 = $_POST['notaProva1'];
                       $notaProva2 = $_POST['notaProva2'];

                       // Calcula o valor total das provas e a porcentagem obtida em cada prova
                       $totalProvas = $valorProva1 + $valorProva2;
                       $porcentagemProva1 = round(($notaProva1 / $valorProva1) * 100);
                       $porcentagemProva2 = round(($notaProva2 / $valorProva2) * 100);

                       // Calcula a nota final e a porcentagem obtida em relação ao total de pontos
                       $notaFinal = $notaProva1 + $notaProva2;
                       $porcentagemTotal = round(($notaFinal / $totalProvas) * 100);

                       // Avalia o conceito do aluno de acordo com a porcentagem obtida
                       if ($porcentagemTotal < 60) {
                       $conceito = "Péssimo";
                     } elseif ($porcentagemTotal >= 60 && $porcentagemTotal < 70) {
                       $conceito = "Ruim";
                     } elseif ($porcentagemTotal >= 70 && $porcentagemTotal < 80) {
                       $conceito = "Bom";
                     } elseif ($porcentagemTotal >= 80 && $porcentagemTotal < 90) {
                       $conceito = "Ótimo";
                     } elseif ($porcentagemTotal >= 90 && $porcentagemTotal <= 100) {
                       $conceito = "Excelente";
                     }

                      // Exibe os resultados na tela
                       echo "Valor total da Prova 1: " . $valorProva1 . "<br>";
                       echo "Valor total da Prova 2: " . $valorProva2 . "<br>";
                       echo "Nota da Prova 1: " . $notaProva1 . "<br>";
                       echo "Nota da Prova 2: " . $notaProva2 . "<br>";
                       echo "Valor total das provas: " . $totalProvas . "<br>";
                       echo "Porcentagem obtida na Prova 1: " . $porcentagemProva1 . "%<br>";
                       echo "Porcentagem obtida na Prova 2: " . $porcentagemProva2 . "%<br>";
                       echo "Nota Final: " . $notaFinal . "<br>";
                       echo "Porcentagem obtida em relação ao total de pontos: " . $porcentagemTotal . "%<br>";
                       echo "Conceito: " . $conceito;
                      
                      ?>
            
                </tr>
            </table>
        </section>
    </div>
</body>

</html>