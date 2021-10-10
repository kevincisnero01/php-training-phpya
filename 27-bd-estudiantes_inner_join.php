<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="20-bd_crear_estudiantes.php">Crear Estudiante</a>
	<a class="menu menu3"  href="19-bd_crear_cursos.php">Crear Curso</a>
	<a class="menu menu4"  href="22-bd_buscar_estudiantes.php">Buscar Estudiante</a>

<div class="container c50">
	<h1 class="tcenter"><u>Listado de Estudiantes</u></h1>
	<h3 class="tcenter">(INNER JOIN)</h3>
	<p><b>Problema:</b> Ahora veremos como imprimir todos los alumnos inscriptos a los cursos junto al nombre del curso donde está inscripto. Los datos se encuentran en las tablas "alumnos" y "cursos". Debemos aparear el código de curso de la tabla "alumnos" con el código de la tabla "cursos"..</p>
    <?php
        require_once"partials/helper.php";
        
		function conexion(){
			$con = new mysqli("localhost","root", "", "db-phpya");

			if($con->connect_error){
				menssages($con->connect_errno, $con->connect_error);
			}

			return $con;
		}

		$con = conexion();

	?>
	<table class="c80 center" border=1>
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Estudiante</th>
				<th>Curso</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$students = $con->query("
				SELECT alu.*, cur.*
				FROM students AS alu
				INNER JOIN courses AS cur ON cur.id=alu.id_course
				");
				
				$total_std = $students->num_rows;
				if($total_std > 0) {
					while($student = $students->fetch_array()){
						echo"<tr>";
						echo"	
						<td class='tcenter'> $student[id]</td> 
						<td> $student[name] </td> 
						<td class='tcenter'> $student[description]</td> 
						";
						echo"</tr>";
					}
			
				}
			?>
			
		</tbody>
		<tfoot>
			<td colspan='2' class='tright'>Total:</td>
			<td class='tcenter'> <?php echo $total_std; ?></td>
		</tfoot>
	</table>

</div><!--container-->
</body>
</html>