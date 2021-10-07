<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<a class="menu menu1"  href="../">Ir a Ejercicios</a>
<a class="menu menu2"  href="16-archivo_lectura_pedido_pizza.php">Leer Archivo</a>
<div class="container c50">
<h1>Archivo-Crear pedido de pizza</h1>
<p>
	<b>Ejercicio: </b>
	Confeccionar un programa en PHP que permita hacer el pedido de pizzas via internet.
	El formulario debe ser:
	Nombre:[..............]
	Direccion:[...................]
	Jamon y queso:[x]
	Cantidad[...]
	Napolitana:[x]
	Cantidad[...]
	Muzzarella:[x]
	Cantidad[...]
	[Confirmar]
	Para el ingreso del nombre, dirección y cantidad de pizzas de cada tipo disponer objetos de la clase "text".
	Disponer tres objetos de tipo "checkbox" para seleccionar los tipos de pizzas.
	Por último disponer un botón para el envío de datos: "submit".
	Grabar en un archivo de texto llamado "pedidos.txt" cada pedido, separados por una línea de puntos entre cada pedido
</p>
<br>
	<fieldset class="c90 center">
		<legend class="b">Ingrese los datos solicitados</legend>
		<form action="15-archivo_procesarpedido_pizza.php" method="POST">

			<label for="name">Nombre: </label>
			<input type="text" name="name" id="name" class="finput" value="jose torres" required>

			<label for="address">Direccion: </label>
			<input type="text" name="address" id="address" class="finput" value="El centro" required>
			<b><u>Tipos de Pizza:</u></b>
			<ul>
				<li>
				<label for="p1" class="c40 line">
					<input type="checkbox" name="pizza1_type" id="p1" value="Jamon y Queso"> Jamon y Queso
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza1_qty" value="1" class="c40 tcenter">
				</li>

				<li>
				<label for="p2" class="c40 line">
					<input type="checkbox" name="pizza2_type" id="p2" value="Napolitana"> Napolitana
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza2_qty" value="1" class="c40 tcenter" >
				</li>

				<li>
				<label for="p3" class="c40 line">
					<input type="checkbox" name="pizza3_type" id="p3" value="Muzzarella"> Muzzarella
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza3_qty" value="1" class="c40 tcenter" >
				</li>
			</ul>

			<button type="submit" class="finput b">Guardar</button>
		</form>
	</fieldset>
<?php
$code = isset($_REQUEST['code']) ? $_REQUEST['code'] : null;
if(!empty($code)){
	if($code == 1){
		echo "<div class='box box-sucess'><b>Registro en archivo</b> exitoso</div>";
	}else{
		echo "<div class='box box-error'><b>Registro fallido</b></div>";
	}
}
?>
</div>
</body>
</html>