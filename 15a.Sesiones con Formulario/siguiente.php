<?php
session_start();
if (!isset($_SESSION['nombre']) and !isset($_SESSION['numero'])){
    header("Location: index.php");
}
$nombre=$_SESSION['nombre'];
$color=$_SESSION['color'];
$numero=$_SESSION['numero']; 

?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        div {
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            width: 300px;
            border: solid black 2px;
            padding: 10px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div>
        <p>Tu nombre es: <?php echo $nombre?></p>
        <p>Tu codigo de color es: <?php echo $color?></p>
        <p>Tu numero es: <?php echo $numero?></p>
        <a href="siguiente.php">Siguiente</a>
    </div>	
</body>
</html>
