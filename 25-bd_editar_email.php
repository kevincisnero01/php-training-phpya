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
	<a class="menu menu3"  href="23-bd_borrar_registro.php">Borrar Estudiante</a>
	<a class="menu menu4"  href="21-bd_listar_registros.php">Listado de Registros</a>


	<div class="container c50">
	<h1 class="tcenter"><u>Editar Correo de Estudiante</u></h1>
	<p><b>Problema:</b> De las actividades con una tabla esta es la más larga. Vamos a resolverlo implementando tres páginas, la primera un formulario de consulta del mail de un alumno, la segunda otro formulario que nos permita cargar su mail modificado y la última registrará el cambio en la tabla..</p>
<?php
	require_once"partials/helper.php";
	require_once"partials/conexion.php";

	$con = conexion();
    $email_search = isset($_REQUEST['email_search']) ? $_REQUEST['email_search'] : null;
    $email_new = isset($_REQUEST['email_new']) ? $_REQUEST['email_new'] : null;
    
?>
	<fieldset class="center c50">
    <legend>Buscar Estudiante</legend>
		<form method="GET">
			<label for="email_search">Correo</label>
			<input type="email" id="email_search" name="email_search" class="finput" placeholder="Ingrese aqui el correo del estudiante" value="<?php echo$email_search; ?>">
			<button type="submit">Buscar</button>
		</form>
	</fieldset>
	<br><br>
<?php
	if(!empty($email_search) || (!empty($email_search) && !empty($email_new))){
        $result = $con->query("SELECT * FROM students WHERE email = '$email_search' ");
        $num_result = $result->num_rows; 
        if($num_result>0){   
 ?>
    <fieldset class="center c50">
        <legend><b>Resultado:</b>
        <?php 
        while($row = $result->fetch_array()){
            echo"$row[name]";
        }
        ?>
        </legend>
      
		<form method="GET">
			<label for="email_new">Correo Nuevo</label>
			<input type="email" id="email_new" name="email_new" class="finput" placeholder="Ingrese el correo nuevo" value="<?php echo$email_new; ?>" >
            <input type="hidden" name="email_search" value="<?php echo$email_search; ?>">
			<button type="submit">Editar</button>
		</form>
	</fieldset>
<?php 
    }else{
        echo"<p class='box box-warning'>No se encontro el correo</p>";
    }
?>
<?php
	if(!empty($email_new)){
        $con->query("UPDATE students SET email = '$email_new' WHERE email = '$email_search' ");
        $num_result = $con->affected_rows; 
        if($num_result>0){
            echo"<p class='box box-sucess'>Se actualizo con exito</p>";
        }else{
            echo"<p class='box box-warning'>No se pudo actualizo el correo</p>";
        }
    }
 ?>
 <center><button type="reset"><a href="25-bd_editar_email.php">	Limpiar	</a></button></center>

		</tbody>
	</table>
<?php }  ?>
	</div><!--container-->
</body>
</html>