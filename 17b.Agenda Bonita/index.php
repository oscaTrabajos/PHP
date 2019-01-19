<?php
//Es como si copiamos y pegamos lo que tenga el fichero conexión
include_once "conexion.php";
//Creamos una select y la mostramos linea a linea
$select = "select id,nombre, telefono, email from contactos order by nombre;";
//Aplicamos la select pasado los datos de usuario,.. y la select, la introducimos dentro de una variable.
$resultado = mysqli_query($conexion, $select);
//Mientras las filas sean mayor a 0
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	   div{
	       margin: 200px;
	       text-align: center;   
	   }
	   table,th,td {
	       border: 2px solid black;
	       margin-left: 20%;
	       padding: 5px;
	   }
	</style>
</head>
<body>
    <div>
        <?php 
            //si el numero de salida correcta es mayor a uno.
            if (mysqli_num_rows($resultado) > 0) {
                //leemos line a linea con mysqli_fetch_assoc e introdimos detro de una variable.
                echo "<h2>Agenda</h2>";
                echo "<table>";
                //Creamos las filas y sus titulos
                echo "<th>Nombre</th><th>Telefono</th><th>Email</th><th>Borrar</th><th>Modificar</th> ";
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    //Mientras este el bucle, mostraremos fila a fila de cada 
                    echo "<tr><td>" . $fila['nombre'] . "</td>
                            <td>" . $fila['telefono'] . "</td>
                            <td>" . $fila['email'] .  "</td>
                            <td><a href='borrar.php?id=" . $fila['id'] . "'><img src='foto/basura.ico' width='20px' heigth='20px'></a></td>
                            <td><a href='formulario.php?id=" . $fila['id'] ."'><img src='foto/lapiz.ico' width='20px' heigth='20px'></a></td></tr>" ;
                    
                };
                echo "</table>";
                //Enviamos al formulario para rellenar los datos.
                echo "<a href='formulario.php'>Añadir nuevo cotactos</a>";
            }

            //Cerrarmos la consexion
            mysqli_close($conexion);
        ?>
    </div>
</body>
</html>
