<?php
$server= "127.0.0.1";
$user= "oscar";
$password = "root";
$nombreBD="registros";

$conexion=mysqli_connect($server,$user,$password,$nombreBD);
if(!$conexion){
    /*Escribimos mysqli_connect_error() solo para ver que error nos
     * da, solo para ver que funciona de manera de desarrollador
     */
    die("La conexion ha fallado en :" . mysqli_connect_error());
}
$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$correo=$_POST['correo'];
$insertar = "insert into usuarios (Nombre, Contrasena, Email) values ('$nombre',MD5('$contraseña'),'$correo');";
                                                                #values ('cuatro','44444','cuatro@gmail.com');
if (mysqli_query($conexion, $insertar)){
    echo "contacto insertado";
}
else {
    echo "contacto no insertado";
}
//Cerrarmos la consexion
mysqli_close($conexion);
?>