<?php
session_start();
$nombre=$_SESSION['nombre'] = $_POST['nombre'];
$color=$_SESSION['color'] = $_POST['color'];
$numero=$_SESSION['numero'] = $_POST['numero'];
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        div {
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            width: 200px;
            border: solid black 2px;
            padding: 10px;
            background-color: white;
        }
        body {
            background-color: <?php echo $color?>;
        }
    </style>
</head>
<body>
    <div>
        <p>Tu nombre es: <?php echo $nombre?></p>
        <p>Tu numero es: <?php echo $numero?></p>
        <a href="siguiente.php">Siguiente</a>
    </div>	
</body>
</html>