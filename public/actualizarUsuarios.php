<?php
  include_once '../vendor/autoload.php';
  use Daw\modelo\consultas;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar usuario</title>
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
    $resultado=$consultas->update($id=$_POST['id'],$nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'])

    ?>
  </body>
</html>
