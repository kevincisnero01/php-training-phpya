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
    <a class="menu menu3"  href="32-bd_estudiantes_paginacion.php">Estudiantes Paginados</a>


	<div class="container c50">
	<h1 class="tcenter"><u>Cursos Paginados</u></h1>
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
			<th class='pl5'>Curso</th>
		</tr>
	</thead>
	<tbody>
		<?php
            

            $courses = $con->query("
            SELECT id, description
            FROM courses 
            LIMIT $inicio,2
            ");

            $total_courses = $courses->num_rows;
            $i = 1;
            $impresos = 0;

            while($course = $courses->fetch_array()){
                echo"<tr>";
                echo"<td class='tcenter'>$course[id]</td>";
                echo"<td>$course[description]</td>";
                echo"</tr>";
                $impresos++;
                $i++;
            }
		?>
	</tbody>
	<tfooter>
		<tr>
            <th colspan="2" >
                <div class="line tleft c50">
                <?php 
                    if ($inicio == 0)
                    echo "anteriores ";
                    else {
                    $anterior = $inicio - 2;
                    echo "<a href=\"32-bd_cursos_paginacion.php?pos=$anterior\">Anteriores </a>";
                    }
                    if ($impresos == 2) {
                    $proximo = $inicio + 2;
                    echo "<a href=\"32-bd_cursos_paginacion.php?pos=$proximo\">Siguientes</a>";
                    } else
                    echo "siguientes";
                
                ?>
                </div>
                <div class="line tright c40">
                    Total: <?php  echo$total_courses; ?>
                </div>
            </th>
            
		</tr>
	</tfooter>
</table>

<?php 

?>

	</div><!--container-->
</body>
</html>