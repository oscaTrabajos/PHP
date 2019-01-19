<?php
$servidor = "127.0.0.1";
$user = "oscar";
$password = "root";
$nombreBD="agenda";
$conexion= mysqli_connect($servidor, $user, $password, $nombreBD);

if(!$conexion){
    /*Escribimos mysqli_connect_error() solo para ver que error nos
     * da, solo para ver que funciona de manera de desarrollador
     */
    die("La conexion ha falladoen :" . mysqli_connect_error());
}
$insertar = "insert into contactos (nombre, telefono, email) values ('cuatro','44444','cuatro@gmail.com');";
if (mysqli_query($conexion, $insertar)){
    echo "contacto insertado";
}
else {
    echo "contacto no insertado";
}
//Cerrarmos la consexion
mysqli_close($conexion);
?>
