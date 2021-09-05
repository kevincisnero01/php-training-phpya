<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>2</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<div class="container c50">
	<h1>Uso de <u>date</u> en php </h1>
	<?php
		$dia = date('d');
		echo "<p><b>Input: </b>$dia</p>";
		echo "<p><b>Output: </b>";
		if($dia <= 10)
		{
			echo "Sitio Activo";
		}else{
			echo "Sitio Web en Mantenimiento";
		}

	?>
</div>
</body>
</html>