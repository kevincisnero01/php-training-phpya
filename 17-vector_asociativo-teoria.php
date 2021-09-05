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
<h1>Vector ASOCIATIVO</h1>
  <li>Un vector asociativo permite acceder a un elemento del vector por medio de un subíndice de tipo string.</li>  
  <li>Ahora vemos que para imprimir el nombre de la persona no debemos recordar una posición dentro de un vector sino un nombre de clave. Esto se hace indispensable cuando administramos un conjunto de datos grandes.</li>
<br>
<b>Ej: Array Asociativo N°1</b>
<pre>
$registro['dni'] = "20456322";
$registro['nombre'] = "Martinez Pablo";
$registro['direccion'] = "Colon 134";
echo $registro['nombre'];
</pre>
<b>Ej: Array Asociativo N°2</b>
<pre>
$registro = array(
  'dni' => '20456322',
  'nombre' => 'Martinez Pablo',
  'direccion' => 'Colon 134'
);
echo $registro['dni'];
</pre>

<li>Cuando tenemos que recorrer en forma completa un vector asociativo en PHP podemos utilizar la estructura 'foreach'. Veamos un ejemplo:</li>
<pre>
  foreach ($registro as $clave => $valor) {
    echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
    echo "<br>";
  }
</pre>
<li>En cada repetición del 'foreach' la variable $clave almacena el subíndice del vector y la variable $valor contiene el valor del vector</li>

<p><b>Ejercicio: </b>Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre. Imprimir una componente del vector.</p>

<?php
$users = [
'jose' => '123',
'gabriel' => '123',
'maria' => '123',
'carlos' => '123',
'genesis' => '123',
];
echo"<b>INPUT:</b><br>";
print_r($users);
echo"<br><br><b>OUTPUT:</b><br>";
foreach ($users as $key => $value) {
  echo"<li>$key = $value </li>";
}
?>
</div>
</body>
</html>