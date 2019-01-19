<?php
$fichero = "/entregas/" . $_SERVER['REMOTE_ADDR'] . "/" . $_GET['fichero'];
unlink($fichero);
header("Location: entregas.php");
?>