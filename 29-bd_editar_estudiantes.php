<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_WARNING);
		$con = new mysqli('localhost', 'root', '', 'db-phpya');
		if($con->connect_error) {
			echo"<br><b>Error de Conexion:</b><br>[".$con->connect_errno."] ".$con->connect_error;
			exit();
		}
	?>
	<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="19-bd_crear_cursos.php">Crear Curso</a>
	<a class="menu menu3"  href="21-bd_listar_registros.php">Listado de Registros</a>

	<div class="container c50">
	<h1 class="tcenter"><u>Actualizar Estudiante</u></h1>
	<p><b>Problema:</b> Ahora complicaremos un poco la modificación de un registro consultando dos tablas. Supongamos que un alumno desea cambiarse de curso, es decir, se inscribió en uno y quiere borrarse de ese e inscribirse en otro diferente. Debemos mostrar en un "select" el curso actual en el que está inscripto y los otros cursos disponibles en la tabla "cursos"..</p>
<?php 
	include 'partials/helper.php';
    include 'partials/conexion.php';
    
    //GET VALUES
    $id_student = isset($_REQUEST['id_student']) ? $_REQUEST['id_student'] : 1;
    //GET VALUES EDIT
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope'] : null;
	$name_new = isset($_REQUEST['name_new']) ? $_REQUEST['name_new'] : null;
	$email_new = isset($_REQUEST['email_new']) ? $_REQUEST['email_new'] : null;
    $id_course_new = isset($_REQUEST['id_course_new']) ? $_REQUEST['id_course_new'] : 1;

	if(!empty($ope) && $ope == 'update'){
        $con->query("UPDATE students SET name = '$name_new', email = '$email_new', id_course = '$id_course_new' WHERE id = $id_student");
        $affected_student = $con->affected_rows;
    }

    if(!empty($id_student)){
        $student = $con->query("SELECT * FROM students WHERE id = '$id_student' ");
        $result_student = $student->num_rows;
    }

    if($result_student>0){
        while($row = $student->fetch_array()){
            $name_current = $row['name'];
            $email_current = $row['email'];
            $curso_current = $row['id_course'];
        }
    }else{
        $name_current = "";
        $email_current = "";
        $curso_current = "";
    }

    
?>
	<fieldset class="center c50">
		<legend class="b">Editar Estudiante</legend>
		<form action="#" method="GET">
            <input type="hidden" name="ope" value="update">
            <input type="hidden" name="id_student" value="<?php echo$id_student; ?>">
            
			<label for="name"><span class="tr">*</span> Nombre </label>
			<input type="text" name="name_new" id="name" class="finput" placeholder="Ej: Jose Perez" required value="<?php echo$name_current; ?>">
			<label for="email"><span class="tr">*</span> Correo </label>
			<input type="email" name="email_new" id="email" class="finput" placeholder="Ej: example@dominio.com" required value="<?php echo$email_current; ?>" >

			<label for="id_course"><span class="tr">*</span> Cursos </label>

			<select name="id_course_new" id="id_course" class="finput">
				<?php
				$result = $con->query("SELECT * FROM courses");
				$num_result = $result->num_rows;
				if($num_result > 0){
					while($row = $result->fetch_array()){
                        echo"<option value='$row[id]'";
                            if($curso_current == $row[id]) echo "selected";
                        echo">$row[description]</option>";
					}
				}else{
					echo"<option>Sin registros</option>";
				}
				?>
			</select>

			<button type="submit" class="finput b">Editar</button>
			<p class="box-sub">Los campos con <span class="tr">*</span> son obligatorios</p>
		</form>
	</fieldset>
	<?php

    if(!empty($ope) && $ope == 'update'){
        if($affected_student>0){
            menssages(200,"Actualización Exitosa: "); 
        }else{
            menssages(400,"Actualización Fallida: ".$con->error);
        }
    }
    
	?>
	</div><!--container-->
</body>
</html>