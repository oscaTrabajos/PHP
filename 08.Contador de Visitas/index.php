<!DOCTYPE html>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<?php 
 $abrir=fopen("textos/fichero.txt","r") or die ("Error de apertura 2");
 $resultado = fgets($abrir);
 fclose($abrir);
 
 $abrir=fopen("textos/fichero.txt","w") or die ("Error de apertura 1");
 $introducir= $resultado +1 ;
 fwrite($abrir, $introducir);
 echo "Eres el visitante numero $introducir";
 fclose($abrir);
 
?>
</body>
</html>