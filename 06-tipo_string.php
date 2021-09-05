<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
	<h1>Variables de tipos string </h1>

	<ul>
		<li>En php un string puede almacenar una serie de caracteres </li>
		<li>Para concatener se utiliza el operado punto(.), </li>
		<li>Para reemplazar una variable dentro de un string se utiliza comillas dobles " "</li>
	</ul>

	<?php
		$nacimiento = "01/01/2000";	
		$edad = 21;	
		$descripcion = "Adulto";

		echo "Juan nacio en la fecha <b>$nacimiento</b>, ";
		echo "por tanto tiene la edad de <b>$edad</b>,"."y eso lo hace un <b>$descripcion</b>";
	?>
</div>
</body>
</html>