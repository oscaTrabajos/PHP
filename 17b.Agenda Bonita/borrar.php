<?php
//Llamamos y utilizamos el fichero conexion.php para conectarnos.
include_once "conexion.php";
/* Traemos desde el index la id con la url "?id=fila[1]"
 * y la utilizamos para borrar segun la id que se pinche
 */
$id=$_GET['id'];
$borrar = "delete from contactos where id='$id' ;";
if (mysqli_query($conexion, $borrar)){
    header("Location: index.php");
}
else {
    /*!!!!!!!!!!!!!!!!IMPORTANTEEE¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡
     * UTILIZAMOS SOLO mysqli_error($conexion) PARA NOSOTROS A LA HORA DE DESARROLLAR
     * LUEGO LO ELIMINARIAMOS.
     */
    
    echo "Contacto no borrado: " . mysqli_error($conexion);
}
?>

