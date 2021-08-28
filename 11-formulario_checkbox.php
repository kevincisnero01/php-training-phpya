<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Seleccionar Deportes Favoritos</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
	El resultado se procesará y mostrará  la cantidad de deportes que practica..
	</p>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$sports =  isset($_POST['sports']) ? $_POST['sports'] : null;

	if(!empty($sports)){
		$total = count($sports);
		echo "<br>Hola. $name, tu deportes seleccionados son un total de: <b>$total</b> ";
		echo"<ol>";
		foreach ($sports as $sport) {
			echo"<li>$sport</li>";
		}
		echo"</ol>";
		echo "<br><a href='11-formulario_checkbox.php'>Volver</a>";
	}else{
	?>
	<fieldset id="form-40">
		<legend>Selecciona los deportes de tu preferencia</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="form-imput" required>
			<label for="type">Deportes: </label>
			<br>
			</label><label for="sport1">Futbol: </label>
			<input type="checkbox" name="sports[]" id="sport1" value="Futbol">

			</label><label for="sport2">Natacion: </label>
			<input type="checkbox" name="sports[]" id="sport2" value="Natacion">

			</label><label for="sport3">Voleibol: </label>
			<input type="checkbox" name="sports[]" id="sport3" value="Voleibol">

			</label><label for="sport4">Futbol Americano: </label>
			<input type="checkbox" name="sports[]" id="sport4" value="Futbol Americano">

			</label><label for="sport10">Tennis: </label>
			<input type="checkbox" name="sports[]" id="sport10" value="Tennis"><br>

			</label><label for="sport5">Maratones: </label>
			<input type="checkbox" name="sports[]" id="sport5" value="Maratones">

			</label><label for="sport6">Arqueria: </label>
			<input type="checkbox" name="sports[]" id="sport6" value="Arqueria">

			</label><label for="sport7">Karate: </label>
			<input type="checkbox" name="sports[]" id="sport7" value="Karate">

			</label><label for="sport8">Béisbol: </label>
			<input type="checkbox" name="sports[]" id="sport8" value="Béisbol">

			</label><label for="sport9">Baloncesto: </label>
			<input type="checkbox" name="sports[]" id="sport9" value="Baloncesto">

			<button type="submit" class="form-imput">Enviar</button>
		</form>
	</fieldset>
	<?php } ?>
</body>
</html>