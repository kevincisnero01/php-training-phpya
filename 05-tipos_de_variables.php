<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicios php</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Tipos de variables en php </h1>

	<p>En php no es necesario definir el tipo de dato que almacena antes de utilizarla, las variables se le declaran al momento de darle un valor</p>

	<?php
		$number = 10;	
		echo "<p class='box'>$number es de tipo integer</p><br>";
		$text = "Texto";
		echo "<p class='box'>$text es de tipo string</p><br>";
		$float = "9.9";
		echo "<p class='box'>$float es de tipo float</p><br>";
		$date = "2021/07/30";
		echo "<p class='box'>$date es de tipo date</p><br>";
		$bolean = true;
		echo "<p class='box'>$bolean es de tipo bolean</p><br>";
		$null = null;
		echo "<p class='box'>$null es de tipo NULL</p><br>";
	?>
</body>
</html>