<!DOCTYPE html>
<html>
<head>
<style type="text/css">
div {
    margin-left: auto;
    margin-right: auto;
    margin-top: 100px;
    width: 700px;
    border: solid black 1px;
    padding: 10px;
}
form {
    border: solid black 2px;
    padding: 10px;
}
table, td {
    border: solid black 2px;
}
</style>
</head>
<body>
<div>
<?php
function mostrarFicherosYFormulario($dirAlumno)
{
    // Abrimos el fichero con el nombre del alumno y lo mostramos.
    $fAlumno = fopen($dirAlumno . "/nombre_alumno.txt", "r");
    $nombreAlumno = fgets($fAlumno);
    fclose($fAlumno);
    echo "<h4>Alumno: $nombreAlumno</h4>";
    
    $ficheros = opendir($dirAlumno);
    echo "<table>";
    while(($fichero = readdir($ficheros)) !== false)
    {
        if($fichero != "." and $fichero != ".." and $fichero != "nombre_alumno.txt")
        {
            $size = filesize($dirAlumno . "/" . $fichero);
            echo "<tr><td>$fichero</td><td>$size bytes</td><td><a href='borrar.php?fichero=$fichero'>Borrar</a></td></tr>";
        }
    }
    echo "</table>";
    closedir($ficheros);
    
    echo "<form action='subir_fichero.php' method='post' enctype='multipart/form-data'>
    <label>Fichero del examen:</label>
    <input type='file' name='fichero'>
    <input type='submit' value='Enviar' name='submit'>
	</form>";
    echo "<a href='entregar.php'>Entregar examen</a>";
}
//Damos nombre al que sera nuestro nuevo directorio
$dirAlumno = "/entregas/" . $_SERVER["REMOTE_ADDR"];
/* Si el directorio de la ip no existe
 * comprobamos los datos del nombre y los apellidos.
 * Si son correctos, creamos el directorio con la ip
 * del alumno.
 */
if(!file_exists($dirAlumno))
{
    if(!empty($_POST['nombre']) && strlen($_POST['nombre']) > 2 &&
        !empty($_POST['primerApellido']) && strlen($_POST['primerApellido']) > 2 &&
        !empty($_POST['segundoApellido']) && strlen($_POST['segundoApellido']) > 2)
    {
        //Creamos un directorio 
        mkdir($dirAlumno);
        $nombreCompleto = $_POST['nombre'] . " " . $_POST['primerApellido'] .
        " " . $_POST['segundoApellido'];
        
        // Escribimos el nombre en un fichero
        $fNombreAlummno = fopen($dirAlumno."/nombre_alumno.txt", "w");
        fwrite($fNombreAlummno, $nombreCompleto);
        fclose($fNombreAlummno);
        
        // Mostrar formulario de envío de ficheros
        mostrarFicherosYFormulario($dirAlumno);
    }
    else
    {
        echo "<h4>Faltan datos</h4>";
        echo "<a href='index.php'>Volver</a>";
    }
    
}
else 
{
    /*
     * El usuario ya había entrado, y por tanto tiene un 
     * directorio ya creado con su ip.
     * Mostramos los ficheros de su directorio.
     */
    // Si no se ha entregado
    if(!file_exists("/entregas/" . $_SERVER['REMOTE_ADDR'] . "/horaEntrega.txt"))
    {
        mostrarFicherosYFormulario($dirAlumno);
    }
    else
    {
        echo "<p>Examen entregado.</p>";
    }
}
?>
</div>
</body>
</html>