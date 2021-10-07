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
	<h1>Vectores-Teoria</h1>
	<ul>
		<li>La traduccion al ingles de <b>Vector</b> es <b>Array</b></li>
		<li>Un array es una coleccion de valores</li>
		<li>Se pueden definir de forma directa. <b>Ej: $nombres[1] = "Kevin"; $nombres[2] ="Barbara";</b> //teniendo como resultado un array de 2 elementos </li>
		<li>Para acceder a su contenido se hace especificando el indice. <b>Ej: echo $nombres[2]; </b>//imprimiendo el valor del indice 2, en este caso 'Barbara'</li>
		<li>Para saber el tamaño de un array se utiliza la funcion: <b>count($array)</b>, pasandole como parametro el array e imprimiendo el total de elementos del mismo, una funcion alternativa es <b>sizeof($array)</b></li>
		<li>Se pueden definir sin especificar el indice: <b>Ej: $meses[] = "Enero";</b> //automaticamente su indice comienza a contar desde 0,1,2,3...</li>
		<li>La primera forma de recorrer un array es con un:  <b>for($indice = 0; $indice < count($nombres) ; $indice++){ echo $nombres[$indice]; }</b> </li>
		<li>La segunda forma de recorrer un array es con un:<b>foreach($nombres as $nombre){ echo $nombre; }</b> </li>
	</ul>
	<p><b>Ejercicio: </b>Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.
	</p>
	<?php
	$semana = ['lunes','martes','miercoles', 'jueves', 'viernes'];
	echo"<br><b>Array:</b><br>";
	foreach ($semana as $dia) {
		echo"$dia<br>";
	}
	echo"<br>";

	for ($i=0; $i < count($semana); $i++) {
		if($i == 0) echo"<br><b>Primer elemento:</b>".$semana[$i];
		if($i == count($semana)-1) echo"<br><b>Ultimo elemento:</b>".$semana[$i];
	}

	?>
</div>
</body>
</html>