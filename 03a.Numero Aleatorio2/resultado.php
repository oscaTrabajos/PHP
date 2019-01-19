<!DOCTYPE html>
<html>
    <head>
        <title>Imágenes</title>
        <style type="text/css">
        .par{
            background-color: green;
        }
        .impar{
            background-color: red;
        }
        </style>
    </head>
    <body>
        <?php
        $entra=$_POST["numero"];
        $aleat=0;
        $contador=0;
        while ($aleat !=$entra) {
            $contador++;
            if ($contador%2==0){
                $class="par";
            }
            else {
                $class="impar";
            }
            $aleat= rand(1,36);
            echo "<p class='$class'>Intento $contador = $aleat </p>";
        } 
        ?>
    </body>
</html>