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
	<a class="menu menu3"  href="22-bd_buscar_estudiantes.php">Buscar Estudiante</a>
	<a class="menu menu4"  href="23-bd_borrar_registro.php">Borrar Estudiante</a>

	<div class="container c50">
	<h1 class="tcenter"><u>Listado de estudiantes</u></h1>
	<p><b>Problema:</b> Confeccionar un programa que recupere los datos de la tabla "estudiantes" de la base de datos.</p>
<?php
	require_once"partials/helper.php";
	require_once"partials/conexion.php";
	
	$con = conexion();

	function getCourse($id,$con){
		$result = $con->query("SELECT * FROM courses WHERE id='$id' ");
		while($row = $result->fetch_array()){
			echo "$row[description]";
		}
	}
	echo"<table class='c80 center' border='1'><thead><tr> 	<th>Codigo</th> <th>Nombre</th> <th>Correo</th> <th>Curso</th>	</tr></thead>";
	$result = $con->query('SELECT * FROM students');
	$num_result = $result->num_rows;
	while($row = $result->fetch_array()){
		echo"<tr>";
		echo "<td class='tcenter'>$row[id] </td>";
		echo "<td>$row[name] </td>";
		echo "<td>$row[email] </td>";
		echo "<td>";
			getCourse($row['id_course'], $con);
		echo"</td>";
		echo"</tr>";
	}
	echo"<tfoot> <tr><th class='tright pr10' colspan='4'>Total: $num_result </th></tr> </tfoot> </table>";
	
?>
<h1 class="tcenter"><u>Listado de Cursos</u></h1>
<p><b>Problema:</b> Confeccionar un programa que recupere los datos de la tabla "cursos" de la base de datos.</p>
<br>
<?php 
$courses = $con->query('SELECT * FROM courses');
$t_courses = $courses->num_rows;
?>
<table class="c80 center" border=1>
	<thead>
		<tr>
			<th class='tcenter c20'>Código</th>
			<th class='pl5'>Descripción</th>
			<th class='c20'>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($course = $courses->fetch_array()){ 
		echo"<tr>";
		echo"<td class='tcenter'>$course[id]</td>";
		echo"<td class='pl10'>$course[description]</td>";
		echo"<td class='tcenter'> <a href='26-bd_editar_cursos.php'><button>Editar</button></a></td>";
		echo"<tr>";
		}
		?>
	</tbody>
	<tfooter>
		<tr>
			<th class='tright pr10' colspan='3'>Total: <?php echo $t_courses; ?></th>
		</tr>
	</tfooter>
</table>
	</div><!--container-->
</body>
</html>