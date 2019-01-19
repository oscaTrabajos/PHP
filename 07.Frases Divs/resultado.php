<?php
$texto=$_POST["texto"];
$fichero=fopen("textos/fichero.txt","a")or die ("Error apertura");
fwrite($fichero,$texto . "\n");
fclose($fichero);
header("Location:index.php");
?>