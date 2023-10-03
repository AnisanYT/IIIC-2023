<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        include_once("Segmentos/encabezado.inc")
    ?>
  </head>
  <body>
    <div class="container">
      <header class="headerStyle">
        <?php
          include_once("Segmentos/header.inc")
        ?>
      </header>
      <main class="d-flex justify-content-center">
        <table>
          <tr>
            <td class= "column" ><a href="#" data-value="naruto" onclick="code(event)"><img src="images/concepto/minis/naruto.webp" alt="naruto" height="300px" width="200px"></a></td>
            <td class= "column" ><a href="#" data-value="jjk" onclick="code(event)"><img src="images/concepto/minis/jjk.webp" alt="jujutsuKaisen" height="300px" width="200px"></a></td>
          </tr>
          <tr>
            <td class= "column" ><a href="#" data-value="snk" onclick="code(event)"><img src="images/concepto/minis/ShingekyNoKyojin.webp" alt="snkyojin" height="300px" width="200px"></a></td>
            <td class= "column" ><a href="#" data-value="tg" onclick="code(event)"><img src="images/concepto/minis/TokyoGhoul.webp" alt="TokypGhoulImage" height="300px" width="200px"></a></td>
          </tr>
        </table>
      </main>
    </div>
    <script src="js/code.js"></script>
  </body>
</html>
