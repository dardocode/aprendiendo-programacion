<?php
  if ($_GET) {
    # Recibi información del formulario HTML por medio de GET
    # El metodo get envia el valor del formulario en la url
    
    $nombre= $_GET['txtNombre'];

    echo "Hola $nombre";
  }

