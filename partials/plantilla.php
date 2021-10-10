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
	<h1 class="tcenter"><u>Titulo del problema</u></h1>
	<p><b>Problema:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
<?php
    require_once"partials/helper.php";
	require_once"partials/conexion.php";
	
	$con = conexion();
?>
	<fieldset class="center c50">
		<legend class="b">Titulo</legend>
		<form action="#" method="POST">
			<label for="name"><span class="tr">*</span> Nombre </label>
			<input type="text" name="name" id="name" class="finput" placeholder="Ej: Jose Perez" required>
			<button type="submit" class="finput b">Guardar</button>
			<p class="box-sub">Los campos con <span class="tr">*</span> son obligatorios</p>
		</form>
	</fieldset>

	<table class="c80 center" border=1>
	<thead>
		<tr>
			<th class='tcenter c20'>COL1</th>
			<th class='pl5'>COL2</th>
			<th class='c20'>COL3</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		?>
	</tbody>
	<tfooter>
		<tr>
			<th class='tright pr10' colspan='3'>Total: <?php  ?></th>
		</tr>
	</tfooter>
</table>

	</div><!--container-->
</body>
</html>