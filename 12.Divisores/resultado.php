<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php 

    $numero = $_POST["numero"];
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo  $i . " ";
        }
    }  

?>
</body>
</html>








