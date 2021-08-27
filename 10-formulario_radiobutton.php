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
	<h1>Verificar Nivel Academico</h1>
	<p><b>Ejercicio: </b>Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
	El resultado se procesara y  mostrara el nombre de la persona y un mensaje indicando el tipo de estudios que posee
	</p>
	<?php
	$name =  isset($_POST['name']) ? $_POST['name'] : null;
	$type =  isset($_POST['type']) ? $_POST['type'] : null;
	if(!empty($type)){
		echo "<br>Hola. $name, tu nivel academico es de ".strtoupper($type);
	}else{
	?>
	<fieldset>
		<legend>Ingrese su nivel Academico</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name"class="form-imput" required>
			<label for="type">Nivel Academico: </label>
			<br>
			</label><label for="primaria">Primaria: </label>
			<input type="radio" name="type" id="primaria" value="primaria" required>
			</label><label for="bachillerato">Bachillerato: </label>
			<input type="radio" name="type" id="bachillerato" value="bachillerato" >
			</label><label for="universitario">Universitario: </label>
			<input type="radio" name="type" id="universitario" value="universitario" >
			<button type="submit" class="form-imput">Enviar</button>
		</form>
	</fieldset>
	<?php } ?>
</body>
</html>