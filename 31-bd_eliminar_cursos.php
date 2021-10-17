<?php

$id_course  =  isset($_REQUEST['id_course']) ? $_REQUEST['id_course'] : null;

if(!empty($id_course)){

    require_once"partials/conexion.php";

    $con = Conexion();

    $con->query("DELETE FROM courses WHERE id = $id_course ");
    $result_course = $con->affected_rows;

    if($result_course>0)
    {
        header('location: 21-bd_listar_registros.php?method=delete&code=200');
    }else{
        header('location: 21-bd_listar_registros.php?method=delete&code=400');
    }

}

?>