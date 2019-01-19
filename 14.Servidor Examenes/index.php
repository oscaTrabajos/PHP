<?php
/*
 * Primero crearemos el directorio entregas
 * para que se creen las carpetas de los
 * usuarios dentro de este directorio en el
 * directorio raiz
 */
$dirAlumno = "/entregas/" . $_SERVER["REMOTE_ADDR"];
if(file_exists($dirAlumno))
{
    header("Location: entregas.php");
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
    width: 200px;
}
form {
    border: solid black 2px;
    padding: 10px;
}
</style>
</head>
<body>
<div>
<form action="entregas.php" method="post">
	<label>Nombre</label>
	<input type="text" name="nombre"/>
	<label>Primer apellido</label>
	<input type="text" name="primerApellido"/>
	<label>Segundo apellido</label>
	<input type="text" name="segundoApellido"/>
	<input type="submit" value="Entrar"/>
</form>
</div>
</body>
</html>