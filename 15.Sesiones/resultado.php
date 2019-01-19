<?php
session_start();
if (!isset($_SESSION ["color"])) {
    header("Location: index.php");
}
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
}
</style>
</head>
<body>
<div>
<h4>Bienvenido</h4>
<?php
$color = $_SESSION['color'];
$numero = $_SESSION['numero'];
$animal = $_SESSION['animal'];
echo "<p>Color: $color</p>";
echo "<p>Número: $numero</p>";
echo "<p>Animal: $animal</p>";
?>
</div>
</body>
</html>