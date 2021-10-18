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

	<div class="container c50">
	<h1 class="tcenter"><u>Estudiantes Paginados</u></h1>
	<p><b>Problema:</b> En situaciones en las cuales una consulta retorna muy muchos datos, en vez de enviarlos todos al navegador, se puede enviar un conjunto limitado de registros. Luego, mediante hipervínculos, ver el resto de datos</p>
<?php
    require_once"partials/helper.php";
	require_once"partials/conexion.php";
	
	$con = conexion();

    if (isset($_REQUEST['pos']))
        $inicio = $_REQUEST['pos'];
    else
        $inicio = 0;
?>

	<table class="c80 center" border=1>
	<thead>
		<tr>
			<th class='tcenter c20'>N°</th>
			<th class='pl5'>Nombre</th>
			<th class='c20'>Curso</th>
		</tr>
	</thead>
	<tbody>
		<?php
            

            $students = $con->query("
            SELECT stu.* , cou.description AS course
            FROM students AS stu JOIN courses AS cou 
            ON stu.id_course=cou.id
            LIMIT $inicio,2
            ");

            $total_students = $students->num_rows;
            $i = 1;
            $impresos = 0;

            while($student = $students->fetch_array()){
                echo"<tr>";
                echo"<td class='tcenter'>$student[id]</td>";
                echo"<td>$student[name]</td>";
                echo"<td>$student[course]</td>";
                echo"</tr>";
                $impresos++;
                $i++;
            }
		?>
	</tbody>
	<tfooter>
		<tr>
            <th  colspan='2'>
                <?php 
                    if ($inicio == 0)
                    echo "anteriores ";
                    else {
                    $anterior = $inicio - 2;
                    echo "<a href=\"32-bd_estudiantes_paginacion.php?pos=$anterior\">Anteriores </a>";
                    }
                    if ($impresos == 2) {
                    $proximo = $inicio + 2;
                    echo "<a href=\"32-bd_estudiantes_paginacion.php?pos=$proximo\">Siguientes</a>";
                    } else
                    echo "siguientes";
                
                ?>
            </th>
			<th class='tright pr10'>Total: <?php  echo$total_students; ?></th>
		</tr>
	</tfooter>
</table>

<?php 

?>

	</div><!--container-->
</body>
</html>