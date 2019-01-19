<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<?php 
	$numero=$_POST["numero"];
	$tieneDivisor = FALSE;
	
	if($numero == 0 or $numero == 1 ){
	    echo "<p>el numero $numero no es primo</p>";
	}
	else{
	    
	    for($contador = 2;$contador <= $numero/2 and !$tieneDivisor; $contador++){
	        if ($numero % $contador == 0){ //pasa el 4 % 2 == 0 si, entonces entra
	            !$tieneDivisor = TRUE;
	        }
	        //El contador se autosumaria si no se cumple la condicion y retorna el bucle 
	    }
	    
	    if (!$tieneDivisor){
	        echo "<p>el numero $numero es primo</p>";
	    }
	    else {
	        echo "<p>el numero $numero no es primo</p>";//el 4 al ser dvidido es verdadero, por lo tanto
        }                                               //la condicion del if no se cumple
	}
	
	
	?>
	<a href="index.php">Volver</a>
	</body>
</html>
