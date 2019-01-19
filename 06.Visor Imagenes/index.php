<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
$fotos = opendir("imagenes");
while(($foto = readdir($fotos)) !== FALSE){
    if($foto != "." and $foto != "..")
{
    echo "<img src='imagenes/$foto'/>";
}
}
closedir($fotos);
?>
</body>
</html>
