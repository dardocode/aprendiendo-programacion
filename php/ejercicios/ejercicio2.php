<?php
  if ($_POST) {
    # Recibi información del formulario HTML
    $nombre= $_POST['txtNombre'];
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hola mundo <?php if ($_POST) {echo $nombre;} ?>
  <form action="ejercicio2.php" method="post">
    Nombre: <input type="text" name="txtNombre" id="txtNombre">
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>