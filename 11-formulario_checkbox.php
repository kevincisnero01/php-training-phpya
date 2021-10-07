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
	<h1>Formulario - Deportes Favoritos (checkbox)</h1>
	<p><b>Ejercicio: </b>Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar una serie de deportes que practica (futbol, basket, tennis, voley)
	El resultado se procesará y mostrará  la cantidad de deportes que practica..
	</p>
	<fieldset id="c40 center">
		<legend class='b'>Selecciona los deportes de tu preferencia</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="finput" required placeholder="EJ: Luis Guitierre">

			<p class='b'>Deportes: </p>

			<label for="sport1" class="c20 line">Futbol:
			<input type="checkbox" name="sports[]" id="sport1" value="Futbol">
			</label>

			<label for="sport2" class="c20 line">Natacion:
			<input type="checkbox" name="sports[]" id="sport2" value="Natacion">
			</label>

			<label for="sport3" class="c20 line">Voleibol:
			<input type="checkbox" name="sports[]" id="sport3" value="Voleibol">
			</label>

			<label for="sport4"  class="c20 line">Baloncesto:
			<input type="checkbox" name="sports[]" id="sport4" value="Futbol Americano">
			</label>

			<label for="sport10" class="c20 line">Tennis:
			<input type="checkbox" name="sports[]" id="sport10" value="Tennis"><br>
			</label>


			<label for="sport5" class="c20 line">Maratones:
			<input type="checkbox" name="sports[]" id="sport5" value="Maratones">
			</label>

			<label for="sport6" class="c20 line">Arqueria:
			<input type="checkbox" name="sports[]" id="sport6" value="Arqueria">
			 </label>

			<label for="sport7" class="c20 line">Karate:
			<input type="checkbox" name="sports[]" id="sport7" value="Karate">
			</label>

			<button type="submit" class="finput">Enviar</button>
		</form>
	</fieldset>
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
		echo "<a class='btn' href='11-formulario_checkbox.php'>Limpiar</a>";
	}
	?>
</div>
</body>
</html>