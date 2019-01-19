<!DOCTYPE html>
<html>
    <head>
        <title>Imágenes</title>
        <style type="text/css">
        </style>
    </head>
    <body>
        <?php
        function mostrarTabla($tabla){
            $contador = 0;
            echo "tabla del $tabla <br>";
            while ($contador <= 10 ){
                
                echo "<p> $tabla x $contador =".($contador * $tabla)."</p>";
                $contador++;
                
            }
        }
        mostrarTabla ("0");
        mostrarTabla ("1");
        mostrarTabla ("2");
        mostrarTabla ("3");
        mostrarTabla ("4");
        mostrarTabla ("5");
        mostrarTabla ("6");
        
        
        ?>
    </body>
</html>