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
	<a class="menu menu3"  href="23-db-borrar-registros.php">Borrar Estudiante</a>
	<a class="menu menu4"  href="21-bd-listar-estudiantes.php">Listado de Estudiante</a>


	<div class="container c50">
	<h1 class="tcenter"><u>Buscar alumno</u></h1>
	<p><b>Problema:</b> Confeccionar un programa que permita ingresar el nombre de un alumno en un formulario, luego mostrar los datos del mismo (tener en cuenta que puede haber más de un alumno con el mismo nombre).</p>
<?php
	require_once"helper.php";
	$con = conexion();
	$search = isset($_REQUEST['search']) ? $_REQUEST['search'] : null;
?>
	<fieldset class="center c50">
		<form method="GET" class="">
			<label for="search">Estudiante</label>
			<input type="text" id="search" name="search" class="finput" placeholder="Ingrese nombre del estudiante" value="<?php echo$search; ?>">
			<button type="submit">Buscar</button>
			<button type="reset">
				<a href="22-bd-buscar-estudiante.php">	Limpiar	</a></button>
		</form>
	</fieldset>
	<br><br>
<?php
	if(!empty($search)){
 ?>
	<table border="1" class="center c80">
		<thead><tr><th>Resultado</th></tr></thead>
		<tbody>
		<?php
			$result = $con->query("SELECT * FROM students WHERE name LIKE '%$search%'");
			$num_result = $result->num_rows;

			if($num_result>0){
				while($row = $result->fetch_array()){
					echo"<tr><td>$row[id] | $row[name] $row[email]</td></tr>";
				}
			}else{
				echo"<tr><td>No se encontraron registros</td></tr>";
			}
		?>
		</tbody>
	</table>
<?php }  ?>
	</div><!--container-->
</body>
</html>