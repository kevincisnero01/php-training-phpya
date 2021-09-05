<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<a class="menu menu2"  href="15-archivo-pedido_pizza_formulario.php">Crear Archivo</a>
<div class="container c50">
<h1>Archivos-Leer pedido de pizza</h1>
<p><b>Ejercicio: </b>Confeccionar un programa que muestre el archivo de pedido de pizzas via internet del punto anterior.</p>
<div class="c30 center">
 <?php
  $ar = fopen("storage/pedidos.txt", "r") or die("No se pudo abrir el archivo");
  while (!feof($ar)) {
    $linea = fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
  }
  fclose($ar);
  ?>
</div>
</div>
</body>
</html>