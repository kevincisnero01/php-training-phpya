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
<?php 
//INCLUDE PARTIALS
require_once"partials/helper.php";
require_once"partials/conexion.php";

//GET VALUES
$method  =  isset($_REQUEST['method']) ? $_REQUEST['method'] : null;
$code  =  isset($_REQUEST['code']) ? $_REQUEST['code'] : null;

//INICIALIZATE VALUES
$con = conexion();

//MESSAGES
if(!empty($method) && !empty($code)){
	if($method == "delete"){
		if($code == 200){
			menssages(200,"REGISTRO ELIMINIADO EXITOSAMENTE");
		}elseif ($code == 400) {
			menssages(400,"ERROR: REGISTRO NO ELIMINADO, POR FAVOR VERIFIQUE"); 
		}
	}
}
?>
	<h1 class="tcenter"><u>Listado de estudiantes</u></h1>
	<p><b>Problema:</b> Confeccionar un programa que recupere los datos de la tabla "estudiantes" de la base de datos.</p>
<?php

	echo"<table class='center' border='1'><thead><tr> 	<th>Codigo</th> <th>Nombre</th> <th>Correo</th> <th>Curso</th> <th>Opciones</th>	</tr></thead>";
	$result = $con->query('
	SELECT std.* ,cou.description AS course
	FROM students AS std 
	JOIN courses AS cou ON std.id_course = cou.id
	');

	$num_result = $result->num_rows;
	$enum = 0;
	while($row = $result->fetch_array()){
		$enum ++;
		echo"<tr>";
		echo "<td class='tcenter'>".$enum."</td>";
		echo "<td>$row[name] </td>";
		echo "<td>$row[email] </td>";
		echo "<td>$row[course]</td>";
		echo"<td class='tcenter'> 
				<a href='29-bd_editar_estudiantes.php?id_student=$row[id]'><button>Editar</button></a>
				<a href='31-bd_eliminar_estudiantes.php?id_student=$row[id]'><button>Eliminar</button></a>
			</td>";
		echo"</tr>";
	}
	echo"<tfoot> <tr><th class='tright pr10' colspan='5'>Total: $num_result </th></tr> </tfoot> </table>";
	
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
		echo"<td class='tcenter'> <a href='26-bd_editar_cursos.php?id_course=$course[id]'><button>Editar</button></a></td>";
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