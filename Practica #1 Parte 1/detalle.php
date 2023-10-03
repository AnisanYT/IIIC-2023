<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
        include_once("Segmentos/encabezado.inc")
    ?>
    </head>
    <body>
        <div class= "container">        
            <header class="headerStyle">
                <?php
                  include_once("Segmentos/header.inc")
                ?>
            </header>
        <main class="">
            <?php
                $detalles = array ( array("images/concepto/normal/naruto.jpg", "Naruto", "2002", "Masashi Kishimoto", "docs/concepto/naruto.txt"),
                                    array("images/concepto/normal/jjk.webp", "Jujutsu Kaisen", "2018","Gege Akutami", "docs/concepto/jjk.txt"),
                                    array("images/concepto/normal/snk.webp", "Shingeky No Kyojin", "2009", "Hajime Isayama", "docs/concepto/snk.txt"),
                                    array("images/concepto/normal/tg.jpg", "Tokyo Ghoul", "2011", "Sui Ishida", "docs/concepto/tg.txt"));
                $val = isset($_GET['valor']) ? $_GET['valor'] : 'Parece que no hay nada'; 
                /*El valor que se toma es el que esta en el link, por ejemplo:
                  detalle.php?valor=naruto, en ese caso es el atributo de 'valor'.
                  Asi se toma el valor del link y se obtiene por un get. */
                #echo "<h1 class=\"text-center\"> " . "Aquí te muestro mas detalles sobre " . $val . "</h1><br>";
                ?>
                <table>
                    <tr>
                        <?php
                        switch ($val) {
                            case 'naruto':
                                echo "<td  class=\"column\" rowspan=\"4\"><img src=\"" . $detalles[0][0] ."\" alt=\"imagenNaruto\" height=\"800px\" width=\"600px\"></td>";
                                echo "<td  class=\"column\"> Serie </td>";
                                echo "<td  class=\"column\">" . $detalles[0][1] . "</td>";
                                break;
                            case 'jjk':
                                echo "<td  class=\"column\" rowspan=\"4\"><img src=\"" . $detalles[1][0] ."\" alt=\"imagenNaruto\" height=\"800px\" width=\"600px\"></td>";
                                echo "<td  class=\"column\"> Serie </td>";
                                echo "<td  class=\"column\">" . $detalles[1][1] . "</td>";
                                break;
                            case 'snk':
                                echo "<td  class=\"column\" rowspan=\"4\"><img src=\"" . $detalles[2][0] ."\" alt=\"imagenNaruto\" height=\"800px\" width=\"600px\"></td>";
                                echo "<td  class=\"column\"> Serie </td>";
                                echo "<td  class=\"column\">" . $detalles[2][1] . "</td>";
                                break;
                            case 'tg':
                                echo "<td  class=\"column\" rowspan=\"4\"><img src=\"" . $detalles[3][0] ."\" alt=\"imagenNaruto\" height=\"800px\" width=\"600px\"></td>";
                                echo "<td  class=\"column\"> Serie </td>";
                                echo "<td  class=\"column\">" . $detalles[3][1] . "</td>";
                                break;
                            default:
                            echo "<h1>Parece que no hay nada que mostrar</h1>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            switch ($val) {
                                case 'naruto':
                                    echo "<td  class=\"column\"> Año </td>";
                                    echo "<td  class=\"column\">" . $detalles[0][2] . "</td>";
                                    break;
                                case 'jjk':
                                    echo "<td  class=\"column\"> Año </td>";
                                    echo "<td  class=\"column\">" . $detalles[1][2] . "</td>";
                                    break;
                                case 'snk':
                                    echo "<td  class=\"column\"> Año </td>";
                                    echo "<td  class=\"column\">" . $detalles[2][2] . "</td>";
                                    break;
                                case 'tg':
                                    echo "<td  class=\"column\"> Año </td>";
                                    echo "<td  class=\"column\">" . $detalles[3][2] . "</td>";
                                    break;
                                default:
                                echo "<h1>Parece que no hay nada que mostrar</h1>";
                            }
                            ?>
                    </tr>
                    <tr>
                        <?php
                            switch ($val) {
                                case 'naruto':
                                    echo "<td  class=\"column\"> Autor </td>";
                                    echo "<td  class=\"column\">" . $detalles[0][3] . "</td>";
                                    break;
                                case 'jjk':
                                    echo "<td  class=\"column\"> Autor </td>";
                                    echo "<td  class=\"column\">" . $detalles[1][3] . "</td>";
                                    break;
                                case 'snk':
                                    echo "<td  class=\"column\"> Autor </td>";
                                    echo "<td  class=\"column\">" . $detalles[2][3] . "</td>";
                                    break;
                                case 'tg':
                                    echo "<td  class=\"column\"> Autor </td>";
                                    echo "<td  class=\"column\">" . $detalles[3][3] . "</td>";
                                    break;
                                default:
                                echo "<h1>Parece que no hay nada que mostrar</h1>";
                            }
                            ?>
                    </tr>
                    <tr>
                        <?php

                            switch ($val) {
                                case 'naruto':
                                    $archivo = $detalles[0][4];
                                    $texto = file_get_contents($archivo);
                                    echo "<td  class=\"column\"> Observaciones </td>";
                                    echo "<td  class=\"column\">" . $texto . "</td>";
                                    break;
                                case 'jjk':
                                    $archivo = $detalles[1][4];
                                    $texto = file_get_contents($archivo);
                                    echo "<td  class=\"column\"> Observaciones </td>";
                                    echo "<td  class=\"column\">" . $texto . "</td>";
                                    break;
                                case 'snk':
                                    $archivo = $detalles[2][4];
                                    $texto = file_get_contents($archivo);
                                    echo "<td  class=\"column\"> Observaciones </td>";
                                    echo "<td  class=\"column\">" . $texto . "</td>";
                                    break;
                                case 'tg':
                                    $archivo = $detalles[3][4];
                                    $texto = file_get_contents($archivo);
                                    echo "<td  class=\"column\"> Observaciones </td>";
                                    echo "<td  class=\"column\">" . $texto . "</td>";
                                    break;
                                default:
                                echo "<h1>Parece que no hay nada que mostrar</h1>";
                            }
                            ?>
                    </tr>
                </table>
        </main>
    </div>
    </body>
</html>