<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="geral">
        <section id="conteudo">
            <table>
                <tr>
                    <td>
                        <?php
                        //obtem os valores digitados no form
                        $valor = $_POST["num"];
                        $fatorial = 1;

                        echo "O fatorial de $valor é ";

                        for ($count = $valor; $count > 0; $count--) {
                        echo   $count . "*";
                        $fatorial = $fatorial * $count;
                        }
                        echo " = " . $fatorial;

                
                        ?>

                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>

</html>