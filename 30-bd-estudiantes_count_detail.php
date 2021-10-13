<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="21-bd_listar_registros.php">Listado de Registros</a>
	<a class="menu menu2"  href="27-bd-estudiantes_inner_join.php">Estudiantes por Curso (General)</a>


<div class="container c50">
	<h1 class="tcenter"><u>Listado de Estudiantes en Curso (Detalle)</u></h1>
	<p><b>Problema:</b> Confeccionar un programa que muestre el nombre del curso, la cantidad de inscriptos y todos los inscriptos a dicho curso.</p>
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
        $id_course = (isset($_REQUEST['id_course'])) ? $_REQUEST['id_course'] : null ;
    
        if(!empty($id_course))
        {
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
                WHERE cur.id = $id_course
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
    <br>
    <center><a href='28-bd-estudiantes_count.php'><button>Volver</button></a></center>
    <?php 
        }else{
            menssages(100," Curso No Identificado, por favor dirijase al: <a href='27-bd-estudiantes_inner_join.php'><u>Listado de Estudiantes en Curso (General)</u></a> para poder filtral los estudiantes");
        }
    ?>

</div><!--container-->
</body>
</html>