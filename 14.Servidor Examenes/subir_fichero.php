
<!DOCTYPE html>
<html>
<head><title>Procesando subida</title>
</head>
<body>
<?php
if(is_uploaded_file($_FILES['fichero']['tmp_name']))
{
    $ficheroTemp = $_FILES['fichero']['tmp_name'];
    $ipAlumno = $_SERVER["REMOTE_ADDR"];
    copy($ficheroTemp, "/entregas/". $ipAlumno . "/" . $_FILES['fichero']['name']);
    header("Location: entregas.php");
}
else
{
    echo "<p>No se envió ningún fichero.</p>";
    echo "<a href='entregas.php'>Volver</a>";
}
?>
</body>
</html>