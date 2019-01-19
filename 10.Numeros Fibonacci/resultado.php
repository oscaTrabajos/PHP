<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php 

    $numero = $_POST["numero"];
    $n1 = 1;
    $n2 = 0;
    for ($i = 0; $i < $numero; $i++) {
       $resultado = $n1+$n2;
       $n1 = $n2;
       $n2 = $resultado;
       echo $resultado."  ";     
    }

?>
</body>
</html>