<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Comparar password - Funciones</h1>
<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades. En la página que se procesan los datos del formulario implementar una función que imprima un mensaje si las dos claves ingresadas son distintas.</p>
<fieldset id="form-40">
	<legend>Login</legend>
	<form action="18-funciones-procesar.php" method="POST">
		<label for="username">Usuario: </label>
		<input type="text" name="username" value="paola" class="form-imput">
		<label for="password">Contraseña: </label>
		<input type="password" name="password" value="123456" class="form-imput">
		<label for="passwordRepeat">Repetir Contraseña: </label>
		<input type="password" name="passwordRepeat" value="123456" class="form-imput">
		<input type="submit" value="Comprobar" class="form-imput">
	</form>

</fieldset>
</body>
</html>