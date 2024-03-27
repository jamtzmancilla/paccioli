<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Personal</title>
</head>

<body>
    <?php 
    include "modulos/cabezote.php";
    include "modulos/menu.php";
    include "modulos/footer.php";
    
    if (isset($_GET["ruta"])) {

      if ($_GET["ruta"] =="inicio"||
             $_GET["ruta"] =="perfil"||
             $_GET["ruta"] =="productos"){
        include "modulos/" .$_GET["ruta"]. ".php";
    }
  }
             ?>
</body>

</html>