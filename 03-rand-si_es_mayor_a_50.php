<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>3</title>
	<style type="text/css">
		p{
			border: 1px solid gray;
			border-radius: 5px;
			padding: 5px;
			display: inline-block;
			margin: 5px;
		}
	</style>
</head>
<body>
	<h1>Uso de <u>rand</u> en php </h1>
	<?php
		$number = rand(1,100);
		echo "<p>$number</p>";

		if($number <= 50)
		{
			echo "<p>El $number es menor a 50</p>";
		}else if($number > 50){
			echo "<p>El $number es mayor a 50</p>";
		}

	?>
</body>
</html>