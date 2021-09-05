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
	<h1 class="tcenter"><u>Ejercicio de Base de datos#1</u></h1>
	<p><b>Problema:</b> Debe crear una base de datos, luego  crear una tabla  "cursos" , seguido de una pagina con un formulario para registrar un curso y por ultimo una pagina que procese los datos.</p>

	<fieldset class="center c50">
	<legend class="b">Registrar Curso</legend>
	<form action="#" method="POST">
		<label for="course"><span class="tr">*</span> Descripcion </label>
		<input type="text" name="course" id="course" class="finput" placeholder="Ej: Desarrollo Web" required>
		<button type="submit" class="finput b">Guardar</button>
		<p class="box-sub">Los campos con <span class="tr">*</span> son obligatorios</p>
	</form>
	</fieldset>
	<?php
	include 'helper.php';
	$course = isset($_POST['course']) ? $_POST['course'] : null;
	if(!empty($course)){
		$con = mysqli_connect("localhost","root","","db-phpya") or die("Error de Conexion");
		$sql="INSERT INTO courses(description) VALUES('$course');";
		$result = mysqli_query($con,$sql);
		if($result){
			menssages(200,"Registro Exitoso: ".$course);
		}else{
			menssages(400,"Registro Fallido: ".mysqli_error($con));
		}
		mysqli_close($con);
	}
	?>
	</div><!--container-->
</body>
</html>