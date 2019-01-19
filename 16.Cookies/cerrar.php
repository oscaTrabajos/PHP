<?php
//Modificamos la cookie datos para ponerla a 0
//Lo hacemos de la misma manera que la hemos creado
//No haría falta de poner los datos como hemos hecho con el nombre y color ya que solo queremos modificar la cookie
setcookie("datos","", 0);
header("Location: index.php");
?>
