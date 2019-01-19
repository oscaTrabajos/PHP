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
        $aleat=0;
        $contador=0;
        while ($aleat !=50) {
            $contador++;
            if ($contador%2==0){
                $class="par";
            }
            else {
                $class="impar";
            }
            $aleat= rand(1,100);
            echo "<p class='$class'>Intento $contador = $aleat </p>";
        } 
        ?>
    </body>
</html>