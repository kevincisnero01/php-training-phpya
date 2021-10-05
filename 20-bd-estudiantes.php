<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_WARNING);
		$con = new mysqli('localhost', 'root', '', 'db-phpya');
		if($con->connect_error) {
			echo"<br><b>Error de Conexion:</b><br>[".$con->connect_errno."] ".$con->connect_error;
			exit();
		}
	?>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="19-bd-curso.php">Crear Curso</a>
	<a class="menu menu3"  href="20-bd-estudiantes.php">Crear Estudiante</a>
	<a class="menu menu4"  href="22-bd-buscar-estudiante.php">Buscar Estudiante</a>
	<a class="menu menu5"  href="21-bd-listar-estudiantes.php">Listado de Estudiante</a>

	<div class="container c50">
	<h1 class="tcenter"><u>Ejercicio de Base de datos#2</u></h1>
	<p><b>Problema:</b> Debe crear una base de datos, luego  crear una tabla  "estudiantes" , seguido de una pagina con un formulario para registrar un estudiante y por ultimo una pagina que procese los datos.</p>

	<fieldset class="center c50">
		<legend class="b">Registrar Estudiantes</legend>
		<form action="#" method="POST">
			<label for="name"><span class="tr">*</span> Nombre </label>
			<input type="text" name="name" id="name" class="finput" placeholder="Ej: Jose Perez" required>
			<label for="email"><span class="tr">*</span> Correo </label>
			<input type="email" name="email" id="email" class="finput" placeholder="Ej: example@dominio.com" required>

			<label for="id_course"><span class="tr">*</span> Cursos </label>

			<select name="id_course" id="id_course" class="finput">
				<?php
				$result = $con->query("SELECT * FROM courses");
				$num_result = $result->num_rows;
				if($num_result > 0){
					while($row = $result->fetch_array()){
						echo"<option value='$row[id]' >$row[description]</option>";
					}
				}else{
					echo"<option>Sin registros</option>";
				}
				?>
			</select>

			<button type="submit" class="finput b">Guardar</button>
			<p class="box-sub">Los campos con <span class="tr">*</span> son obligatorios</p>
		</form>
	</fieldset>
	<?php
	include 'helper.php';
	//GET VALUES
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$id_course = isset($_POST['id_course']) ? $_POST['id_course'] : 1;
	//GET VALUES
	if(!empty($name)){
		if($con->query("INSERT INTO students(name,email,id_course) VALUES('$name','$email',$id_course)")){
			menssages(200,"Registro Exitoso: ".$name);
		}else{
			menssages(400,"Registro Fallido: ".$con->error);
		}
		$con->close();
	}
	?>
	</div><!--container-->
</body>
</html>