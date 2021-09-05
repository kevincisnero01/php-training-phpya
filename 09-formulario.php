<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
	<h1>Formulario - Verificar si es mayor de edad</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18)</p>
	<fieldset class="c50 center">
		<legend>Formulario</legend>
		<form action="09-get_formulario.php" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="finput" placeholder="Ej: Katherine Morales">
			<label for="name">Fecha de Nacimiento: </label>
			<input type="date" name="date"class="finput">
			<input type="submit" value="Enviar" class="finput">
		</form>
	</fieldset>
</div>
</body>
</html>