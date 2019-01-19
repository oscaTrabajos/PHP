<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php 
    $numero = $_POST["numero"];
    for ($i = $numero-1; $i > 0; $i--) {
        $numero=$numero*$i;        
    }
    echo $numero;
?>
</body>
</html>