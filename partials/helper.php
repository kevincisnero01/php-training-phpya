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

?>