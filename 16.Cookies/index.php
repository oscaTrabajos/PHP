<?php
//Si existe la cookie, redirijo al segundo php
if (isset($_COOKIE["datos"])){
    header("Location: resultado.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	   div{
	       border: 1px solid black;
	       margin: 200px;
	       padding: 10px;
	       text-align: center;   
	   }
	</style>
</head>
<body>
    <div>
        <form action="resultado.php" method="post">
    		<label>Usuario</label>
    		<input type="text" name="nombre">
    		<input type="color" name="color">
    		<button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
