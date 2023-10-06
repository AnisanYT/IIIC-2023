<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("segmentos/encabezado.inc")
    ?>
    
</head>
<body>
    <div class="container">
        <?php
            $edad = $_POST['edad'];
            $allow = 21;
            $falta = $allow - $edad;

            if ($edad < $allow) {
                echo "<p class=text-center>Te faltan " . $falta . " años para poder jugar.</p>";
                echo "<div class=\"d-flex justify-content-center\">";
                echo "<img src=\"img/truste.png\" alt=\"triste\" heigth=\"300px\" width=\"300px\">";
                echo "</div>";
        
                echo "<p class= \"text-center\">Esta pagina se cerrara en 5 segundos: </p>";
                echo "<div class=\"d-flex justify-content-center\">";
                echo  "<p id=\"hora\"></p>";
                echo "<p>:</p>";
                echo "<p id=\"minutos\"></p>";
                echo "<p>:</p>";
                echo "<p id=\"segundos\"></p>";
                echo "</div>";
            } else {
                session_start(); #Hay que empezar la sesiòn en ambos lados para poder enviar los datos.
                $_SESSION['dato'] = $edad;
                header("Location: datos.php");
            }
        ?>
    </div>
    <script src="js/procesos.js"></script>
</body>
</html>
