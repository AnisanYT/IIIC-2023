<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("segmentos/encabezado.inc");
    ?>
</head>
<body>
    <div class="container">
        <?php
            $nombre = $_POST["nombre"];
            $monto = $_POST["monto"];
            $numDados = $_POST["dados"];
            #echo "<h1> Comprobar que todo esta bien: <br>" . $nombre . ", " . $monto . ", " . $numDados . "</h1>";
            echo "<h1 class=\"text-center\">Bienvenido " . $nombre . "</h1>";

            #contruimos la tabla para que se pueda ver los datos
            # Nombre | Daniel | Monto disponible | 200.000
            #                 | Monto apostado   | 10.000
            echo "<table>";
            echo "<tr >";
            echo "<td class= \"border\" style=\"width: 100px; background: #cdbe8b\"> Nombre </td>";
            echo "<td class= \"border\" style=\"width: 400px; background: #fff0c2\">" . $nombre . "</td>";
            echo "</tr>";
            echo "</table>";
        ?> 
    </div>       
</body>
</html>