<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Ingresos Mensuales</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
	En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)..
	</p>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$income =  isset($_POST['income']) ? $_POST['income'] : null;

	if(!empty($income)){
		echo "<br>Hola. $name, basado en tus ingresos:";
		if($income == "c")
			echo"<br><u>Si debes pagar impuestos</u>";
		else
			echo"<br><u>No debes pagar impuestos</u>";

		echo "<br><a href='12-formulario_select.php'>Volver</a>";
	}else{
	?>
	<fieldset id="form-40">
		<legend>Selecciona sus ingresos mensuales</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="form-imput" required>
			<label for="income">Ingresos: </label>
			<select id="income" name="income" class="form-imput" required>
				<option value="a">1$-1000$</option>
				<option value="b">1001$-3000$</option>
				<option value="c">>3000$</option>
			</select>
			<button type="submit" class="form-imput">Enviar</button>
		</form>
	</fieldset>
	<?php } ?>
</body>
</html>