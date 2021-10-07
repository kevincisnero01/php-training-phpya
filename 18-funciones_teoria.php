
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
<h1>Funciones-Teoria</h1>
<pre>
La sintaxis para la definición de una función en PHP es:

function [nombre de la función]([parámetros])
{
  [algoritmo]
}
</pre>
<li>Las funciones nos permiten tener un programa más ordenado y facilitan la reutilización del código.</li>
<li>Una función puede retornar un dato, para ello debemos emplear la palabra clave <b>return</b> seguida del valor que devuelve</li>
<pre>
function retornarpromedio($valor1, $valor2)
{
  $pro = $valor1 / $valor2;
  return $pro;
}
$v1 = 100;
$v2 = 50;
echo $p = retornarpromedio($v1, $v2);
</pre>
<li>Si queremos que retorne más de un dato debemos emplear parámetros por referencia.</li>
<li>Es decir, cuando le antecedemos el carácter ampersand al parámetro, es por referencia.
</li>
<li>Supongamos que necesitamos ahora que una función nos retorne el cuadrado y cubo de un número:</li>
<pre>
function cuadradocubo($valor, &$cuad, &$cub)
{
$cuad = $valor * $valor;
$cub = $valor * $valor * $valor;
}
</pre>
<?php
  function cuadradocubo($valor, &$cuad, &$cub)
  {
    $cuad = $valor * $valor;
    $cub = $valor * $valor * $valor;
  }
  cuadradocubo(2, $c1, $c2);
  echo "El cuadrado de 2 es:" . $c1 . "<br>";
  echo "El cubo de 2 es:" . $c2;
  ?>
</div><!--container-->
</body>
</html>
