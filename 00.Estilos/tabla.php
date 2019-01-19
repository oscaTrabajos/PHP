<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	  div {
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            text-align: center;
        }
	   table,th,td {
	       border: 2px solid black;
	       margin: auto;
	       padding: 5px;
	   }
	</style>
</head>
<body>
    <div>
        <?php 
            echo "<h2>Agenda</h2>";
            echo "<table>";
            //Creamos las filas y sus titulos
            echo "<th>Nombre</th><th>Telefono</th><th>Email</th><th>Borrar</th><th>Modificar</th> ";
            $contador = 1;
            while ($contador < 15) {
                //Mientras este el bucle, mostraremos fila a fila de cada 
                echo "<tr><td>" . $contador . "</td><td>" . $contador . "</td><td>" . $contador . "</td><td>" . $contador . "</td><td>". $contador ."</td></tr>" ;
                $contador ++;
            };
            echo "</table>";
            //Enviamos al formulario para rellenar los datos.
            echo "<a href='formulario.php'>Añadir nuevo cotactos</a>";
        ?>
    </div>
</body>
</html>
