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
    </style>
</head>
<body>
    <div>
        <form action="resultado.php" method="post">
    		<label>Nombre:</label><br>
    		<input type="text" name="nombre">
    		<label>Contraseña:</label><br>
    		<input type="password" name="contraseña"><br>
    		<label>Correo:</label><br>
    		<input type="email" name="correo">
    		<button type="submit">Enviar</button>
    	</form>
    </div>	
</body>
</html>
