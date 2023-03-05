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
                        if (isset($_POST['border-color']) && isset($_POST['fill-color']) && isset($_POST['border-char']) && isset($_POST['fill-char']) && isset($_POST['width']) && isset($_POST['height'])) {
                            $border_color = $_POST['border-color'];
                            $fill_color = $_POST['fill-color'];
                            $border_char = $_POST['border-char'];
                            $fill_char = $_POST['fill-char'];
                            $width = $_POST['width'];
                            $height = $_POST['height'];
                            echo "<table'>";
                            for ($i = 0; $i < $height; $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < $width; $j++) {
                                    if ($i == 0 || $i == $height - 1 || $j == 0 || $j == $width - 1) {
                                        echo "<td style='color: $border_color;'>$border_char</td>";
                                    } else {
                                        echo "<td style='color: $fill_color;'>$fill_char</td>";
                                    }
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