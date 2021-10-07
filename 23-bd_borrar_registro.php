<?php error_reporting(E_ALL ^ E_WARNING) ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="19-bd_crear_cursos.php">Crear Curso</a>
	<a class="menu menu3"  href="20-bd-crear_estudiantes.php">Crear Estudiante</a>
	<a class="menu menu4"  href="21-bd_listar_registros.php">Listado de Registros</a>
	<div class="container c50">
	<h1 class="tcenter"><u>Borrar Registros</u></h1>

<?php
function conexion()
{
	$con = new mysqli("localhost","root","","db-phpya");

	if($con->connect_error)
		echo"<b>Error de Conexion: </b> [$con->connect_errno] $con->connect_error";
	return $con;
}
$con = conexion();
$email_student = isset($_REQUEST['email_student']) ? $_REQUEST['email_student'] : null;
$course_name = isset($_REQUEST['course_name']) ? $_REQUEST['course_name'] : null;

?>
<p><b>Problema:</b>Confeccione un algoritmo que solicite ingresar el mail de un alumno y posteriormente efectúe su borrado.</p>
	<fieldset class="center c80">
		<legend>Borrar Estudiante</legend>
		<form method="POST" class="">
			<label for="email_student">Ingrese el correo del estudiante que desee eliminar</label>
			<input type="text" id="email_student" name="email_student" class="finput" placeholder="Ejemplo: felipe@gmail.com" value="<?php echo$email_student; ?>">
			<button type="submit">Eliminar</button>
			<button type="reset">
				<a href="23-db-borrar-registros.php">	Limpiar	</a></button>
		</form>
	</fieldset>
	<br><br>
<?php
	if(!empty($email_student)){
		$result = $con->query("SELECT * FROM  students WHERE email = '$email_student' ");
		$num_result = $result->num_rows;

		if($num_result > 0){
			while($row = $result->fetch_array()){
				$con->query("DELETE FROM students WHERE  email = '$email_student'");
				echo"<p class='box box-sucess'>Borrado del estudiante $row[name] con exito</p>";
			}

		}else{
			echo"<p class='box box-error'>No se encontro un estudiante con el siguiente email: \"$email_student\".</p>";
		}
	}
 ?>
 <p><b>Problema:</b>Confeccionar un programa que permita ingresar el nombre de un curso por teclado y posteriormente efectúe el borrado de dicho registro en la tabla cursos.</p>
 	<fieldset class="center c80">
		<legend>Borrar Curso</legend>
		<form method="POST" class="">
			<label for="course_name">Ingrese nombre del curso que desea eliminar</label>
			<input type="text" id="course_name" name="course_name" class="finput" placeholder="Ejemplo: Diseño Web" value="<?php echo$course_name; ?>">
			<button type="submit">Eliminar</button>
			<button type="reset">
				<a href="23-db-borrar-registros.php">	Limpiar	</a></button>
		</form>
	</fieldset>
	<br><br>
<?php
	if(!empty($course_name)){
		$result = $con->query("SELECT * FROM  courses WHERE description = '$course_name' ");
		$num_result = $result->num_rows;

		if($num_result > 0){
			while($row = $result->fetch_array()){
				$con->query("DELETE FROM courses WHERE  description = '$course_name'");
				echo"<p class='box box-sucess'>Borrado del curso $row[description] con exito</p>";
			}

		}else{
			echo"<p class='box box-error'>No se encontro un curso con el siguiente nombre: \"$course_name\".</p>";
		}
	}
 ?>
 <center><a href="24-bd_borrar_registros.php">Borrar Todos los estudiantes</a></center>

	</div><!--container-->
</body>
</html>