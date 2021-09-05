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
<h1>Estructura repetitivas(for, while, do/while) - Tablas de Multiplicar</h1>
<h3>TEORIA:</h3>
	<pre>
	<b>Estructura for:</b>
	for([inicializar la variable]; [condicion] ; [incremento o decremento])
	{
		[instrucciones]
	}

	<!--Si la misma se verifica como verdadera se ejecuta todo el bloque comprendido entre las llaves de apertura y cerrado-->

	<b>Estructura while:</b>
	while(condicion)
	{
		[instrucciones]
	}
	<!--La condición del while se verifica antes de ingresar al bloque a repetir. Si la misma se verifica falsa la primera vez no se ejecutará el bloque.-->

	<b>Estructura do/while:</b>

	do(condicion)
	{
		[instrucciones]
	}while;
	</pre>
	<!-- la condición se verifica luego de ejecutarse el bloque repetitivo.-->
<h3>PRACTICA:</h3>
	<center>
	<div class="box line">
	<?php
	echo"<b>Tabla del 3:</b><br>";
	$cont1 = 1;
	for ($numb1 = 3; $numb1 <= 30 ; $numb1 = $numb1 + 3)
	{
		echo "3 x $cont1 = $numb1 <br>";
		$cont1++;
	}
	?>
	</div><!--box1-->

	<div class="box line">
	<?php
	echo"<b>Tabla del 6:</b><br>";
	$cont2 = 1;
	$numb2 = 6;
	while ($cont2 <= 10)
	{
		echo "6 x $cont2 = $numb2 <br>";
		$cont2++;
		$numb2 = $numb2 + 6;
	}
	?>
	</div><!--box1-->

	<div class="box line">
	<?php
	echo"<b>Tabla del 9:</b><br>";
	$cont3 = 1;
	$numb3 = 9;
	do {
		echo "9 x $cont3 = $numb3 <br>";
		$cont3++;
		$numb3 = $numb3 + 9;
	}while(($cont3 <= 10));
	?>
	</div><!--box1-->
	</center>
</div><!--container-->
</body>
</html>