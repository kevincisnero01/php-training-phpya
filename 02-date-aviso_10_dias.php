<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>2</title>
	<style type="text/css">
		h3{
			border: 1px solid gray;
			border-radius: 5px;
			padding: 5px;
			display: inline-block;
			margin: 5px;
		}
	</style>
</head>
<body>
	<h1>Uso de <u>date</u> en php </h1>
	<?php
		$dia = date('d');
		echo "<h3>$dia</h3>";

		if($dia <= 10)
		{
			echo "<h3>Sitio Activo</h3>";
		}else{
			echo "<h3>Sitio Web en Mantenimiento</h3>";
		}

	?>
</body>
</html>