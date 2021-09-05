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
	<h1>Uso de <u>rand</u> en php </h1>
	<?php
		$number = rand(1,100);
		echo "<p><b>Input: </b>$number</p>";
		echo "<p><b>Output: </b>";
		if($number <= 50)
		{
			echo "El $number es menor a 50<";
		}else if($number > 50){
			echo "El $number es mayor a 50<";
		}
		echo"</p>";

	?>
</div>
</body>
</html>