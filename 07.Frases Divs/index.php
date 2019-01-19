
<!DOCTYPE html>
<html>
<head>
<title>Frases</title>
<style type="text/css">
div {
    border: black solid 1px;
    text-align: center;
    width: 200px;
    padding: 10px;
    margin: 10px;
}
a {
    display: block;
    width: 100px;
}
div, a {
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body>
<?php 
$fichero=fopen("textos/fichero.txt","r") or die("Error apertura fichero");
while (!feof($fichero)){
    $lectura=fgets($fichero);
    if (!empty($lectura)){
        echo "<div>$lectura</div>";
    }
}
fclose($fichero);
?>
<a href="formulario.php">Añadir frase</a>
</body>
</html>









