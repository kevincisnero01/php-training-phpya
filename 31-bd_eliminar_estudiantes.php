<?php

$id_student  =  isset($_REQUEST['id_student']) ? $_REQUEST['id_student'] : null;

if(!empty($id_student)){

    require_once"partials/conexion.php";

    $con = Conexion();

    $con->query("DELETE FROM students WHERE id = $id_student ");
    $result_student = $con->affected_rows;

    if($result_student>0)
    {
        header('location: 21-bd_listar_registros.php?method=delete&code=200');
    }else{
        header('location: 21-bd_listar_registros.php?method=delete&code=400');
    }

}

?>