<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	   img {
	       with: 100px;
	       height: 100px;
	   }
	  
	</style>
</head>
<body>
<?php 

$fotos = opendir("fotos");
while(($imagen = readdir($fotos)) !== FALSE ){
    if ($imagen != "." and $imagen != ".."){
        echo "<a href='fotos/$imagen'> <img src='fotos/$imagen'> </a>";
    }
}
closedir($fotos);

?>
<form action="resultado.php" method="post" enctype="multipart/form-data">
 <fieldset>
	<label>Sube tu imagen:</label><br>
	<input type="file" name="subir" ><br>
	<button type="submit">Subir</button>
 </fieldset>	
</form>
</body>
</html>