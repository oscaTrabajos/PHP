<?php
/* Recogemos los datos extraidos en el formulario y los pasamos a variables,
 * estas seras las que luego utilicemos para hacer el updae de la base de datos
 * hacemos funcionar la variable con mysqli_query($conexion, $modificar)y si se
 * ha realizado de manera correcta lo mandamos al index o especificamos que no se ha modificado
 */
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
//Llamamos y utilizamos el fichero conexion.php para conectarnos.
include_once "conexion.php";
$id=$_GET['id'];
$modificar = "UPDATE contactos SET nombre='$nombre',telefono='$telefono',email='$email' where id='$id' ;";
if (mysqli_query($conexion, $modificar)){
    header("Location: index.php");
}
else {
    /*!!!!!!!!!!!!!!!!IMPORTANTEEE¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
     * UTILIZAMOS SOLO mysqli_error($conexion) PARA NOSOTROS A LA HORA DE DESARROLLAR
     * LUEGO LO ELIMINARIAMOS.
     */
    echo "Contacto no modificado: " . mysqli_error($conexion);
}
?>

