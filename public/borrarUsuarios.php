<?php
  include_once '../vendor/autoload.php';
  use Daw\modelo\consultas;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
    <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
    <a href="indice.html">Volver</a>
<?php
$consultas = new consultas();
$resultado=$consultas->delete($_POST['id']);

echo "Usuario borrado correctamente"
 ?>
  </body>
</html>
