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
form {
    border: solid black 2px;
    padding: 10px;
}
input {
    width: 160px;
}
</style>
</head>
<body>
<div>
<h4>Clave de profesor</h4>
<form action="listadoEntregas.php" method="post">
	<label>Clave</label>
	<input type="password" name="clave"/>
	<input type="submit" value="Acceder"/>
</form>
</div>
</body>
</html>