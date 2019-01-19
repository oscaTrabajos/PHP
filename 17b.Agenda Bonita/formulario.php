<?php
/*Mandamos el id desde el index, si existe le daremos un nombre
 * a action, dependiendo de si queremos insertar o modificar
 */
if (isset($_GET['id'])) {
    //damos un nombre uevo al action
    $id=$_GET['id'];
    $enviar="modificar.php?id=$id";
    /*Llamamos a la conexion que hemos declarada en conexion.php,
     * creamos la select, la introducimos en una variable y la
     * accionamos con mysqli_query($conexion, $select).
     */
    include_once "conexion.php";
    $select="select nombre,telefono,email from contactos where id='$id'";
    $resultado = mysqli_query($conexion, $select);
    /* Si las filas correctas son mayor a 0 "mysqli_num_rows($resultado) > 0"
     * entonces copiamos la fila resultante y la introducmos en una variable
     * "$fila = mysqli_fetch_assoc($resultado)", posteriormente sacamos todos
     * los datos y los vamos introduciendo en variables segun el nombre de las columnas.
     */
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $nombre=$fila['nombre'];
        $telefono=$fila['telefono'];
        $email=$fila['email'];
    }
}
//Si no existe id pondremos que el actión sea para insertar
else {
    $enviar='insertar.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	   div{
	       border: 1px solid black;
	       margin: 200px;
	       padding: 10px;
	       text-align: center;   
	   }
	</style>
</head>
<body>
    <div>
    <!--
     Mostramos la variable para que el formulario la entienda y nos redirija donde queramos
     En cada input usamos valor por defecto (value) los datos extraido en el caso que queramos modificarlos    
     -->
        <form action="<?php echo $enviar; ?>"method="post">
    		<label>Nombre:</label><br>
    		<input type="text" name="nombre" value="<?php if (isset($_GET['id'])) { echo $nombre;}?>"><br>
    		<label>Telefono:</label><br>
    		<input type="tel" name="telefono" value="<?php  if (isset($_GET['id'])) {echo $telefono;}?>"><br>
    		<label>Email:</label><br>
    		<input type="email" name="email" value="<?php  if (isset($_GET['id'])) { echo $email; }?>"><br>
    		<button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

