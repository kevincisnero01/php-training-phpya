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
	<h1>Formulario - Nivel Academico (Radio btn)</h1>
	<p><b>Ejercicio: </b>Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
	El resultado se procesara y  mostrara el nombre de la persona y un mensaje indicando el tipo de estudios que posee
	</p>

	<fieldset class="c50 center">
		<legend>Ingrese su nivel Academico</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="finput" required placeholder="Ej: Sthephany Campos">
			<p class="b">Nivel Academico: </p>
			</label><label for="primaria">Primaria: </label>
			<input type="radio" name="type" id="primaria"  value="primaria" required>
			</label><label for="bachillerato">Bachillerato: </label>
			<input type="radio" name="type" id="bachillerato" value="bachillerato" >
			</label><label for="universitario">Universitario: </label>
			<input type="radio" name="type" id="universitario" value="universitario" >
			<button type="submit" class="finput">Enviar</button>
		</form>
	</fieldset>
	<center>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$type =  isset($_POST['type']) ? $_POST['type'] : null;
	if(!empty($type)){
		echo "<br>Hola. $name, tu nivel academico es de ".strtoupper($type);
		echo "<br><br><a class='btn' href='10-formulario_radiobutton.php'>Limpiar</a>";
	}

	?>
	</center>
</div>
</body>
</html>