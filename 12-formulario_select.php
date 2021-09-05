<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
	<h1>Formulario - Verificar si paga impuesto</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
	En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)..
	</p>
	<fieldset id="c40 center">
		<legend>Selecciona sus ingresos mensuales</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="finput" required placeholder="Ej: Barbara Solorzano">
			<label for="income">Ingresos: </label>
			<select id="income" name="income" class="finput" required>
				<option value="a">1$-1000$</option>
				<option value="b">1001$-3000$</option>
				<option value="c">>3000$</option>
			</select>
			<button type="submit" class="finput">Enviar</button>
		</form>
	</fieldset>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$income =  isset($_POST['income']) ? $_POST['income'] : null;

	if(!empty($income)){
		echo "<br>Hola. $name, basado en tus ingresos:";
		if($income == "c")
			echo"<br><u>Si debes pagar impuestos</u>";
		else
			echo"<br><u>No debes pagar impuestos</u>";
		echo"<br><br>";
		echo "<a class='btn' href='12-formulario_select.php'>Limpiar</a>";
	}

	?>
</div>
</body>
</html>