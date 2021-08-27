<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<style type="text/css">
		fieldset{
			width: 30%;
		}
		.form-imput{
			display: block;
			height: 25px;
			width: 100%;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<h1>Verificar si es mayor de edad</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18)</p>
	<fieldset>
		<legend>Formulario</legend>
		<form action="09-get_formulario.php" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="form-imput">
			<label for="name">Fecha de Nacimiento: </label>
			<input type="date" name="date"class="form-imput">
			<input type="submit" value="Enviar" class="form-imput">
		</form>
	</fieldset>
</body>
</html>