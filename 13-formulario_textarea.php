<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Completar Curriculo-Textarea</h1>
	<p><b>Ejercicio: </b>Confeccionar una página que muestre un contrato dentro de un textarea, disponer puntos suspensivos donde el operador debe ingresar un texto. La página que procesa el formulario sólo debe mostrar el contrato con las modificaciones que hizo el operador.
	</p>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$cv =  isset($_POST['cv']) ? $_POST['cv'] : null;

	if(!empty($cv)){
		echo "<br><b>Nombre:</b> $name ";
		echo "<br><b>Curriculo:</b> $cv";
		echo "<br><a href='13-formulario_textarea.php'>Volver</a>";
	}else{
	?>
	<fieldset id="form-50">
		<legend>Complete los datos solicitados para el contrato</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="form-imput" required>
			<label for="income">Curriculo: </label>
			<textarea name="cv"class="form-imput" style="height: 100px;">
En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
			</textarea>
			<button type="submit" class="form-imput">Enviar</button>
		</form>
	</fieldset>
	<?php } ?>
</body>
</html>