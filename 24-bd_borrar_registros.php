<?php error_reporting(E_ALL ^ E_WARNING) ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Borrar all</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="21-bd_listar_estudiantes.php">Listado de Estudiantes</a>
	<div class="container c50">

	<h1 class="tcenter"><u>Borrar todos los registros</u></h1>

	<p><b>Problema:</b>Efectuar el borrado de todos los registros de la tabla estudiantes.</p>
	<button class="btn danger" form="form_delete_est">Eliminar todos los estudiantes</button>
	<form method="GET" id="form_delete_est">
		<input type="hidden" name="delete" value="students">
	</form>
	<?php
		function conexion()
		{
			$con = new mysqli("localhost","root","","db-phpya");
			if($con->connect_error){
				echo"<p class='box box-error'>Error de Conexion:</b> [$con->connect_errno] $con->connect_error</p>";
				exit();
			}
			return $con;
		}
		$delete = isset($_REQUEST['delete']) ? $_REQUEST['delete'] : null;

		if(!empty($delete)){
			if($delete == "students"){
				echo"<br><b>Resultado: </b><br>";
				$con = conexion();
				$con->query("DELETE FROM student");
				$num_result = $con->num_rows;
				if($num_result>0){
					$student = ($num_result>1) ? "estudiantes" : "estudiante";
					echo"<p class='box box_success'>Se elimino con exito [ $num_result ] $student </p>";
				}else{
					echo"<p class='box box_warning'>No se elimino ningun estudiante</p>";
				}
			}
		}
	?>

	<br>

	<p><b>Problema:</b>Efectuar el borrado de todos los registros de la tabla cursos.</p>
	<button class="btn danger" form="form_delete_cur">Eliminar todos los cursos</button>

	<form method="GET" id="form_delete_cur">
		<input type="hidden" name="delete" value="courses">
	</form>
	<?php
	if(!empty($delete)){
		if($delete == "courses"){
			echo"<br><b>Resultado: </b><br>";
			$con = conexion();
			$con->query("DELETE FROM coursesww");
			$num_result = $con->affected_rows;
			if($num_result>0){
				$course = ($num_result>1) ? "cursos" : "curso";
				echo"<p class='box box-sucess'>Se elimino con exito [ $num_result ] $course </p>";
			}else{
				echo"<p class='box box-warning'>No se elimino ningun cursos</p>";
			}
		}
	}
 	?>
 	<center><a href="24-bd_borrar_registros.php">Limpiar</a></center>
	</div><!--container-->
</body>
</html>