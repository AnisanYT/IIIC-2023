<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once('segmentos/encabezado.inc');
    ?>
</head>
<body>
    <?php
        session_start();
        $edad = $_SESSION['dato'];
        session_abort();
    ?>
    <div class="container">
        <h1 class="text-center m-4">Usted ha pasado el primer requerimiento.</h1>
        <h4 class= "text-center m-4">Ahora, le solicitamos los demàs datos para que empiece a jugar.</h4>
        <form action="validar.php" method="post">
            <div class="d-flex justify-content-center">
                <label for="nombre" class="text-center">Ingrese su nombre: </label>
                <input type="text" name="nombre" id="nombre" class = "mx-4">
            </div>
            <div class="d-flex justify-content-center">
                <label for="monto" class= "mt-4 text-center">monto: </label>
                <input type="number" name="monto" id="monto" class="mx-4 mt-4">
            </div>
            <div class="d-flex justify-content-center">
                <label for="dados" class= "mt-4 text-center">Cantidad de dados: </label>
                <select name="dados" id="dados" class = "mx-4 mt-4">
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
</html>
