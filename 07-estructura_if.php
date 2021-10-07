<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
	<h1>Estructura condicional (if) - Loteria</h1>
	<p>
		Cuando se pretende que el programa, una vez llegado a un cierto punto, tome un camino concreto en determinados casos y otro diferente si las condiciones de ejecución difieren, se utiliza el conjunto de instrucciones:if, else y elseif
	</p>
	<h3>Premios</h3>
	<ul>
		<li>Si es menor o igual a 3: <b>(30$)</b></li>
		<li>Si mayor a 3 pero menor o igual a 6: <b>(60$)</b></li>
		<li>Si mayor a 6 pero menor o igual a 10: <b>(100$)</b></li>
	</ul>
	<?php
		$number = rand(1,10);
		echo "<br>El numero sorteado en la loteria es: <b>$number</b>";
		echo "<br>!Felicidades a ganado! ";
		if($number<=3) echo"<b>30$ USD</b>";
		elseif($number>3 && $number<=6) echo"<b>60$ USD</b>";
		else echo"<b>100$ USD</b>";
	?>
</div>
</body>
</html>