<?php
error_reporting(E_ALL ^ E_WARNING);

function menssages($code,$detail) //, $msj, $error
{
	switch ($code) {
		case '200':
			$detail = !empty($detail) ? $detail : "Consulta Exitosa";
			echo"<div class='box box-sucess'><b>[$code]</b> $detail</div>";
			break;
		case '400':
			$detail = !empty($detail) ? $detail : "Consulta Fallida";
			echo"<div class='box box-error'><b>Código:</b>$code  <b>Detalle:</b>$detail</div>";
			break;
		case '100':
			echo"<div class='box box-warning'><b>Código:</b>$code  <b>Detalle:</b>$detail</div>";
			break;

		default:
		echo"<div class='box box-default'><b>Código:</b>$code  <b>Detalle:</b>$detail</div>";
			break;
	}
}

?>