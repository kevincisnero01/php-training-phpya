<?php
if($code == 200){
	echo"<div class='alert alert-sucess'></div>";
}elseif($code == 400){
	echo"<div class='alert alert-error'>  Contraseñas No coinciden, por favor verifique</div>";
}elseif($code == 100){
	echo"<div class='alert alert-warning'>  Por favor ingrese los campos requeridos</div>";
}
?>