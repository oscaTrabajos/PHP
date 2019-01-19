<?php
//Si existe la variable post
//Venimos desde el formulario
//Si está definida el nombre:
if(isset($_POST["nombre"])){
    $nombre=$_POST["nombre"];
    $color=$_POST["color"];
    //Creamos cookie si está definido un nombre
    setcookie("datos", $nombre . "," . $color, time() +20);
}
//Si la cookie existe:
else if(isset ($_COOKIE["datos"])) {
    //cortamos por la coma para separar los campos
    //damos nombre a las variables de nombre y color, como se haría con los array
    $datos= explode(",", $_COOKIE["datos"]);
    $nombre=$datos[0];
    $color=$datos[1];
}
//Si no, evitamos que salga un error, haciendo que envíe al index.php
else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	   div{
	       border: 1px solid black;
	       madring: 200px;
	       text-align: center;   
	   }
	   div {
	       background-color: white;
       }
	</style>
</head>
<!-- Damos de fondo al body el color elegido en el php, para ello accedemos con un echo al php -->
<body style="background-color: <?php echo $color ?>">
    <div>
    	<!-- Haremos lo mismo para mostrar el nombre-->
    	<p>Eres <?php echo $nombre?></p>
    	<a href="otro.php">Salir</a>
    </div>	
</body>
</html>
