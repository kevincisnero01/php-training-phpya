<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="20-bd-estudiantes.php">Crear Estudiante</a>
	<a class="menu menu3"  href="22-bd-buscar-estudiante.php">Buscar Estudiante</a>
	<a class="menu menu4"  href="23-db-borrar-registros.php">Borrar Estudiante</a>

	<div class="container c50">
	<h1 class="tcenter"><u>Listado de estudiantes</u></h1>
	<p><b>Problema:</b> Confeccionar un programa que recupere los datos de la tabla "estudiantes" de la base de datos.</p>
<?php
	require_once"helper.php";
	$con = conexion();

	function getCourse($id,$con){
		$result = $con->query("SELECT * FROM courses WHERE id='$id' ");
		while($row = $result->fetch_array()){
			echo "$row[description]";
		}
	}
	echo"<table border='1'><thead><tr> 	<th>Codigo</th> <th>Nombre</th> <th>Correo</th> <th>Curso</th>	</tr></thead>";
	$result = $con->query('SELECT * FROM students');
	$num_result = $result->num_rows;
	while($row = $result->fetch_array()){
		echo"<tr>";
		echo "<td>$row[id] </td>";
		echo "<td>$row[name] </td>";
		echo "<td>$row[email] </td>";
		echo "<td>";
			getCourse($row['id_course'], $con);
		echo"</td>";
		echo"</tr>";
	}
	echo"<tfoot><tr> <th colspan='4' style='text-align:left'>Total: $num_result </th> </tr></tfoot> </table>";
	$con->close();
?>
	</div><!--container-->
</body>
</html>