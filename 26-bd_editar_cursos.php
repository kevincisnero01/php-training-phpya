<?php error_reporting(E_ALL ^ E_WARNING) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
	<a class="menu menu2"  href="20-bd_crear_estudiantes.php">Crear Estudiante</a>
	<a class="menu menu3"  href="23-bd_borrar_registro.php">Borrar Estudiante</a>
	<a class="menu menu4"  href="21-bd_listar_registros.php">Listado de Registros</a>


<div class="container c50">
<h1 class="tcenter"><u>Editar Curso</u></h1>
<?php
require_once"partials/helper.php";
require_once"partials/conexion.php";

$id_course = isset($_REQUEST['id_course']) ?  $_REQUEST['id_course'] : null;
$description_new = isset($_REQUEST['description_new']) ?  $_REQUEST['description_new'] : null;

if(!empty($id_course)){
    $con = conexion();
    $result = $con->query("SELECT * FROM courses WHERE id = $id_course");

    while($row = $result->fetch_array()){
        $description = $row['description'];
    }
?>

<fieldset class="center c50">
<legend>Curso</legend>
    <form method="POST">
    <input type="hidden" name="id_course" value="<?php echo$id_course; ?>">
    <label for="description_new">Nueva Descripción</label>
    <input type="text" class="finput" id="description_new" name="description_new" placeholder="Ingrese nuevo nombre del curso" value="<?php echo $description; ?>">
    <button type="submit" class="btn c100">Editar</button>
    </form>
</fieldset>
  
<?php
}else{
    menssages(400,"Curso no encontrado, por favor asegurese de presionar un curso existente del listado");
}

if(!empty($id_course) && !empty($description_new))
{
$con->query("UPDATE courses SET description = '$description_new' WHERE id='$id_course' ");
$num_result = $con->affected_rows; 
    if($num_result>0){
        echo"<p class='box box-sucess'>Se actualizo con exito</p>";
        echo"<p class='tcenter'><a href='21-bd_listar_registros.php'>Volver al listado</a>";
    }else{
        echo"<p class='box box-warning'>No se pudo actualizo el correo</p>";
    }
}
?>
</div>
</body>
</html>