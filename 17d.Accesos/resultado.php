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
    		  include_once 'database.php';
    		  $select="select nombre,contrasena from prueba;";
    		  $resultado=mysqli_query($conexion, $select);
    		  echo "<h2>REGISTRO USUARIOS</h2>";
    		  echo "<table>";
    		  echo "<tr>";
    		  echo "<th>Usuario</th>";
    		  echo "<th>Contraseña</th>";
    		  echo "</tr>";
    		  if (mysqli_num_rows($resultado) > 0) {
        		  while ($fila=(mysqli_fetch_assoc($resultado))) {
        		      echo "<tr><td>" . $fila['nombre'] . "</td><td>" . $fila['contrasena'] . "</td></tr>";
        		  }
    		  }
    		  echo "</table>";
    		  echo "<h2>REGISTRO USUARIOS FALLIDOS</h2>";
    		  echo "<table>";
    		  echo "<tr>";
    		  echo "<th>Usuario</th>";
    		  echo "<th>Contraseña</th>";
    		  echo "</tr>";
    		  $select="select nombre,contrasena from prueba2;";
    		  $resultado=mysqli_query($conexion, $select);
    		  if (mysqli_num_rows($resultado) > 0) {
    		      while ($fila=(mysqli_fetch_assoc($resultado))) {
    		          echo "<tr><td>" . $fila['nombre'] . "</td><td>" . $fila['contrasena'] . "</td></tr>";
    		      }
    		  }
    		  echo "</table>";
    		  mysqli_close($conexion);
    		?>
		
		<a href="cerrar.php">Cerrar sesion</a>
    </div>	
</body>
</html>