<?php
// Si al menos hay un fichero
function contarFicheros($directorio)
{
    
    $dir = opendir($directorio);
    
    $cont = 0;
    while(($fichero = readdir($dir)) !== false)
    {
        if($fichero != "." and $fichero != ".." and
            $fichero != "nombre_alumno.txt")
        {
            $cont++;
        }
    }
    closedir($dir);
    return $cont;
}
$numFicheros = contarFicheros("/entregas/" . $_SERVER['REMOTE_ADDR']);
if($numFicheros > 0)
{
    $horaEntrega = "/entregas/" . $_SERVER['REMOTE_ADDR'] . "/horaEntrega.txt";
    // Escribimos la hora y fecha de entrega
    $fHoraEntrega = fopen($horaEntrega, "w");
    fwrite($fHoraEntrega, date(DATE_RFC822));
    fclose($fHoraEntrega);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
div {
    margin-left: auto;
    margin-right: auto;
    margin-top: 100px;
    width: 800px;
}
</style>
</head>
<body>
<div>
<h4>No hay ficheros que entregar</h4>
<a href="entregas.php">Volver</a>
</div>
</body>
</html>