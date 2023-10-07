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
            
            $vectorAsociativo = array('1' => 'img\caraUno.png',
                                      '2' => 'img\dosCara.png',
                                      '3' => 'img\tresCara.png',
                                      '4' => 'img\cuatroCara.png',
                                      '5' => 'img\cincoCara.png',
                                      '6' => 'img\seisCara.png');   
            $jsonArray = json_encode($vectorAsociativo);
            echo "<div id=\"montocito\" data-value=\"$monto\"></div>";
            echo "<div id=\"dadosNumero\" data-value=\"$numDados\"></div>";
            #echo "<h1> Comprobar que todo esta bien: <br>" . $nombre . ", " . $monto . ", " . $numDados . "</h1>";
            echo "<h1 class=\"text-center\">Bienvenido " . $nombre . "</h1>";

            #contruimos la tabla para que se pueda ver los datos
            # Nombre | Daniel | Monto disponible | 200.000
            #                 | Monto apostado   | 10.000
            echo "<div class = \"d-flex justify-content-center\"><table>";
            echo "<tr >";
            echo "<td class= \"border\" style=\"width: 100px; background: #cdbe8b\"> Nombre </td>";
            echo "<td class= \"border\" style=\"width: 400px; background: #fff0c2\">" . $nombre . "</td>";
            echo "<td class= \"border\" style=\"width: 200px; background: #cdbe8b\"> Monto disponible </td>";
            echo "<td class= text-center \"border\" style=\"width: 200px; background: #fff0c2\"> ₡" . "<p id=\"monto\" value=\"\"> </p>" . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan=\"2\"></td>";
            echo "<td class= \"border\" style=\"width: 200px; background: #cdbe8b\">Monto apostado</td>";
            echo "<td class= text-center \"border\" style=\"width: 200px; background: #fff0c2\"> 
            <input class=\"mx-2\" type=\"number\" name=\"montoApostado\" id=\"montoApostado\"></td>";
            echo "</table></div>";
            
            #echo "<div class = \"d-flex justify-content-center\" onClick=\"resta()\"><button class = \"btn btn-success\"> Restar </button></div>";
            echo "<div class =\"row m-4\">  ";
            echo "<div id=\"1\"  class =\"col-3\" > </div>";
            echo "<div id=\"2\"  class =\"col-3\" > </div>";
            #echo "<img src=\"". $vectorAsociativo["1"] . "\">";
            echo "<div id=\"3\"  class =\"col-3\" > </div>";
            echo "<div id=\"emojiSad_Happy\" class =\"col-2\">  </div>";
            echo "</div>";
            echo "<button onClick=\"jugar()\" class = \"btn btn-success m-4\"> [ J U G A R] </button>";
            echo "<div id= \"buildTable\"\>";
            
            echo "<h2 class= \"text-center\"> Elige un numero para apostar. </h2>";

            if ($numDados == 2) {
                include_once("segmentos/tabla2.inc");
            } else {
                include_once("segmentos/table3.inc");
            }
            echo "</div>";
           
        ?> 

        <button type="text" style="background-color: transparent; border: none;" id="json" value='<?php echo $jsonArray; ?>'>   </button>
        <script src="js/procesos.js"></script>
    </div>  
    
         
</body>
</html>