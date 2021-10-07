<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
<h1>Funciones-Comparar password</h1>
<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades. En la página que se procesan los datos del formulario implementar una función que imprima un mensaje si las dos claves ingresadas son distintas.</p>
<fieldset class="c50 center">
	<legend class="b">Login</legend>
	<form action="18-funciones_procesar.php" method="POST">
		<label for="username">Usuario: </label>
		<input type="text" name="username" value="paola" class="finput">
		<label for="password">Contraseña: </label>
		<input type="password" name="password" value="123456" class="finput">
		<label for="passwordRepeat">Repetir Contraseña: </label>
		<input type="password" name="passwordRepeat" value="123456" class="finput">
		<input type="submit" value="Comprobar" class="finput b">
	</form>
</fieldset>
<?php
$response = isset($_REQUEST['response']) ? $_REQUEST['response'] : null;
if(!empty($response)){
	if($response == 'igual'){
		echo "<div class='box box-sucess'><b>Contraseñas coinciden</b> exitosamente</div>";
	}elseif($response == 'diferente'){
		echo "<div class='box box-error'><b>Contraseñas no coinciden</b>, por favor verifique</div>";
	}
}
?>
</div><!--container-->
</body>
</html>