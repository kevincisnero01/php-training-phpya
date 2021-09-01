<?php

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$passwordRepeat = isset($_POST['passwordRepeat']) ? $_POST['passwordRepeat'] : null;

function checkPassword($p1,$p2){
	if($p1 == $p2){
		echo "<br><b>Contraseñas Comprobadas Exitosamente: Son Iguales</b><br>";
	}else{
		echo "<br><b>Contraseñas No Coinciden: Por favor Verifique</b><br>";
	}
}

if(!empty($password) && !empty($passwordRepeat)){
	checkPassword($password,$passwordRepeat);
	echo "Datos comprobados";
}
echo"<br><br><a href='18-funciones-formulario.php'>Volver a Formulario</a><br>";



?>