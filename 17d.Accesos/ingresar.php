<?php
if ($_POST["contraseña"] == "Madagascar"){
    $nombre=$_POST["nombre"];
    $contraseña=$_POST["contraseña"];
    setcookie("datos",$nombre . "," . $contraseña, time() +120);
    include_once 'database.php';
    $insertar="insert into prueba(nombre,contrasena) values ('$nombre',MD5('$contraseña'))";
    if (mysqli_query($conexion, $insertar)) {
        header("Location: resultado.php");
    }
}
elseif (isset($_COOKIE["datos"])){
    header("Location: reultado.php");
    
}
else {
    $nombre=$_POST["nombre"];
    $contraseña=$_POST["contraseña"];
    include_once 'database.php';
    $insertar="insert into prueba2(nombre,contrasena) values ('$nombre',MD5('$contraseña'))";
    if (mysqli_query($conexion, $insertar)) {
        header("Location: index.php");
    }
}
?>