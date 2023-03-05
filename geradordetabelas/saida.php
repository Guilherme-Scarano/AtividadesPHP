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
                        if(isset($_POST['submit'])){
                            $titulo = $_POST['titulo'];
                            $espaco = $_POST['espaco'];
                            $linhas = $_POST['linhas'];
                            $colunas = $_POST['colunas'];
                            $borda = $_POST['borda'];
                            $cor_fundo = $_POST['cor_fundo'];
                            $cor_texto = $_POST['cor_texto'];
                        
                            echo "<table border='$borda' style='background-color: $cor_fundo; color: $cor_texto; width: $espaco%;'>";
                            if(!empty($titulo)){
                                echo "<caption>$titulo</caption>";
                            }
                            for($i=1; $i<=$linhas; $i++){
                                echo "<tr>";
                                for($j=1; $j<=$colunas; $j++){
                                    echo "<td>Linha $i Coluna $j</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        ?>
                </tr>
            </table>
        </section>
    </div>
</body>

</html>