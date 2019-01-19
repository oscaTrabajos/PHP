<?php
/* Escribimos todos los datos de acceso a la base de datos y hacemos la llamada
 * para realizar el acceso a la base de datos y escribir en ella.
 */
$servidor = "127.0.0.1";
$user = "oscar";
$password = "root";
$nombreBD="agenda";
$conexion= mysqli_connect($servidor, $user, $password, $nombreBD);
?>
