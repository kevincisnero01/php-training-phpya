<?php
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$passwordRepeat = isset($_POST['passwordRepeat']) ? $_POST['passwordRepeat'] : null;

function checkPassword($p1,$p2){
	if($p1 == $p2){
		return 'igual';
	}else{
		return 'diferente';
	}
}

if(!empty($password) && !empty($passwordRepeat)){
	$response = checkPassword($password,$passwordRepeat);
	header('location:18-funciones_formulario.php?response='.$response);
}
?>
