<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Pedido Pizza-Lectura Archivos</h1>
<p><b>Ejercicio: </b>Confeccionar un programa que muestre el archivo de pedido de pizzas via internet del punto anterior.</p>

 <?php
  $ar = fopen("storage/pedidos.txt", "r") or die("No se pudo abrir el archivo");
  while (!feof($ar)) {
    $linea = fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>

</body>
</html>