<?php

function conexion(){
	$con = new mysqli('localhost','root','','db-phpya');
	if($con->connect_error){
		echo"<b>Error de conexion: </b><br>[$con->connect_errno] $con->connect_error";
	}
	return $con;
}

?>