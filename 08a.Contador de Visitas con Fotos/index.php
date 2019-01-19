<!DOCTYPE html>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<?php 
$abrir=fopen("textos/fichero.txt","r") or die ("Error de apertura 1");
$resultado = fgets($abrir);
fclose($abrir);
for ( $i = 0 ; $i < strlen($resultado) ; $i ++ ) {
    $imagen = substr($resultado, $i, 1);
    echo "<img src='fotos/" . $imagen, ".jpg' >";
}
$abrir=fopen("textos/fichero.txt","w") or die ("Error de apertura 2");
$introducir= $resultado +1 ;
fwrite($abrir, $introducir);
fclose($abrir);




?>
</body>
</html>