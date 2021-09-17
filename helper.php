<?php
error_reporting(E_ALL ^ E_WARNING);

function menssages($code,$detail) //, $msj, $error
{
	if($code == 200){
		$detail = !empty($detail) ? $detail : "Consulta Exitosa";
		echo"<div class='box box-sucess'><b>[$code]</b> $detail</div>";
	}elseif($code == 400){
		$detail = !empty($detail) ? $detail : "Consulta Fallida";
		echo"<div class='box box-error'><b>Código:</b>$code  <b>Detalle:</b>$detail</div>";
	}
}

function conexion(){
	$con = new mysqli('localhost','root','','db-phpya');
	if($con->connect_error){
		echo"<b>Error de conexion: </b><br>[$con->connect_errno] $con->connect_error";
	}
	return $con;
}

?>