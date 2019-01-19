<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
    td {
        border: 1px solid black;
    }
    .par{
        background-color: red;
    }
         
    .par{
        background-color: green;
    } 
    </style>
    </head>
    <body>
    <?php
        $filas=$_POST["filas"];
        $columnas=$_POST["columnas"];
        $contador=0;
        //  $clase="par";
        echo "<table>";
        for($f=0;$f < $filas; $f++){
            echo "<tr>";
            
                for($c=0;$c < $columnas;$c++){
                    //           if ($contador %2 == 0){
                        //               $clase="par";
                        //           }
            //        else {
                    //        $clase="impar";
                    //       }
                    echo "<td style='background: rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")'>$contador</td>";
                    $contador++;
                 
                }
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<a href='index.php'>Volver a probar</a>"
     ?>  
     </body>
</html>
      
            