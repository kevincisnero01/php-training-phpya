<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">

	.pizza_label{
	display: inline-block;
	width: 50%;
	}
	.pizza_input{
	width: 35%;
	text-align: center;
	}
	</style>
</head>
<body>
<h1>Pedido Pizza-Crear Archivos</h1>
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
	<fieldset id="form-50">
		<legend>Ingrese los datos solicitados</legend>
		<form action="16-archivo-pedido_pizza_procesar.php" method="POST">

			<label for="name">Nombre: </label>
			<input type="text" name="name" id="name" class="form-imput" value="jose torres" required>

			<label for="address">Direccion: </label>
			<input type="text" name="address" id="address" class="form-imput" value="El centro" required>
			<b><u>Tipos de Pizza:</u></b>
			<ul>
				<li>
				<label for="p1" class="pizza_label">
					<input type="checkbox" name="pizza1_type" id="p1" value="Jamon y Queso"> Jamon y Queso
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza1_qty" value="1" class="pizza_input">
				</li>

				<li>
				<label for="p2" class="pizza_label">
					<input type="checkbox" name="pizza2_type" id="p2" value="Napolitana"> Napolitana
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza2_qty" value="1" class="pizza_input" >
				</li>

				<li>
				<label for="p3" class="pizza_label">
					<input type="checkbox" name="pizza3_type" id="p3" value="Muzzarella"> Muzzarella
				</label>
				<b>Cantidad:</b> <input type="number" name="pizza3_qty" value="1" class="pizza_input" >
				</li>
			</ul>

			<button type="submit" class="form-imput">Enviar</button>
		</form>
	</fieldset>
</body>
</html>