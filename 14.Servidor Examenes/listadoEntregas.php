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
table, td {
    border: solid black 2px;
}
</style>
</head>
<body>
<div>
<?php
function nombreAlumno($directorio)
{
    // Abrimos el fichero con el nombre del alumno y lo mostramos.
    $fAlumno = fopen("/entregas/". $directorio . "/nombre_alumno.txt", "r");
    $nombreAlumno = fgets($fAlumno);
    fclose($fAlumno);
    return $nombreAlumno;
}
function examenEntregado($directorio)
{
    if(file_exists("/entregas/" . $directorio . "/horaEntrega.txt"))
    {
        return "Sí";
    }
    else
    {
        return "No";
    }
}
function listadoFicheros($directorio)
{
    $dirAlumno = "/entregas/" . $directorio; 
    $ficheros = "";
    
    $dir = opendir($dirAlumno);
    
    while(($fichero = readdir($dir)) !== false)
    {
        if($fichero != "." and $fichero != ".." and 
            $fichero != "horaEntrega.txt" and $fichero != "nombre_alumno.txt")
        {
            $ficheros = $ficheros . $fichero . "<br>"; 
        }
    }
    closedir($dir);
    return $ficheros;
}
if($_POST['clave'] != "madagascar")
{
    echo "<p>Clave incorrecta</p>";
    echo "<a href='profesor.php'>Volver</a>";
}
else
{
    echo "<h4>Estado de las entregas</h4>";
    $dirEntregas = "/entregas/";
    $ficheros = opendir($dirEntregas);
    echo "<table>";
    echo "<tr><td>Alumno</td><td>ip</td><td>Ficheros</td><td>Entregado</td></tr>";
    while(($directorio = readdir($ficheros)) !== false)
    {
        if($directorio != "." and $directorio != "..")
        {
            echo "<tr><td>" . nombreAlumno($directorio) . "</td>";
            echo "<td>$directorio</td>";
            echo "<td>" . listadoFicheros($directorio) . "</td>";
            echo "<td>" . examenEntregado($directorio) . "</td></tr>";
        }
    }
    echo "</table>";
}
?>
</div>
</body>
</html>