<?php
$numero=$_POST["numero"];
$tieneDivisor = FALSE;

if($numero == 0 or $numero == 1 ){
    echo "<p>el numero $numero no es primo</p>";
}
else{
    $contador=2;
    while($contador <= $numero/2 ){
        if ($numero % $contador == 0){
            !$tieneDivisor = TRUE;
        }
        $contador++;
    }
    if (!$tieneDivisor){
        echo "<p>el numero $numero es primo</p>";
    }
    else {
        echo "<p>el numero $numero no es primo</p>";
    }
}

?>