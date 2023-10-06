<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once('segmentos/encabezado.inc')
    ?>
</head>
<body>
    <div class="container">
        <h1 class="text-center m-2">Bienvenido al casino Loko</h1>
        <h6 class="text-center">Esperemos que no pierdas todo tu dinero... ¿O si?</h6>
        <p class="text-center m-4">Segun nuestro reglamento, es necesario que como edad minima tengas <strong>21 años.</strong> <br>
            De lo contrario no podremos dejarte avanzar y deberas regresar para cuando 
            los cumplas.
        </p>
        <!-- Para procesar un formulario se debe de indicar que la accion es el procesamiento
            es decir, la pagina donde se procesaran los datos.
            Tambien, debemos de tener en cuenta que el metodo es por POST o GET -->
        <form action="procesar.php" method="post"> 
            <div class="d-flex justify-content-center">
                <label for="edad">Ingresa tu edad: </label>
                <input class="mx-2" type="number" name="edad" id="edad">
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" class="my-4 btn btn-success" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>