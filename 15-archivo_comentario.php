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
<h1>Archivos - Guardar comentarios</h1>
<ul>
	<li>la función <b>fopen()</b> para crear archivos</li>
	<li>El <b>primer</b> parametro el nombre del archivo. fopen('datos.txt','a')</li>
	<li>El <b>segundo</b> parametro indica la forma de apertura de archivo</li>
	<li><b>"a"</b> (lo crea o si ya existe el archivo lo abre para añadir datos al final)</li>
	<li><b>"w"</b> (crea el archivo de texto, si existe borra su contenido))</li>
	<li><b>"r"</b> (abre el archivo para su lectura)</li>
	<li>La función fopen retorna una referencia al archivo y la almacenamos en una variable llamada $ar</li>
	<li>Para grabar datos utilizamos la función <b>fputs()</b> que tiene dos parámetros: 1)la referencia al archivo donde grabamos y 2) el string a grabar. Ej: <b>fputs($ar, $_REQUEST['nombre']); </b></li>
	<li>Para cerrar el archivo correctamente utilizamos la función <b>fclose()</b>.</li>
</ul>
<br>
	<fieldset >
		<legend class="b">Ingrese los datos solicitados</legend>
		<form action="#" method="POST">
			<label for="name">Nombre: </label>
			<input type="text" name="name" id="name" class="finput" required placeholder="Ej: Miguel Campos">
			<label for="comment">Comentario: </label>
			<textarea name="comment" id="comment" rows="10" cols="80"></textarea>
			<button type="submit" class="finput b">Guardar</button>
		</form>
	</fieldset>
<?php
$name = isset($_POST['name']) ? $_POST['name'] : null;
$comment = isset($_POST['comment']) ? $_POST['comment'] : null;
if(!empty($comment)){
	$ar = fopen("storage/datos.txt","a") or die ("Problemas para grabar");
	fputs($ar,$name);
	fputs($ar, "\n");
	fputs($ar,$comment);
	fputs($ar, "\n");
	fputs($ar, "--------------------------------------------------------");
	fputs($ar, "\n");
	fclose($ar);
echo "<div class='box box-sucess'><b>Registro en archivo</b> exitoso</div>";
}
?>
</ul>
</div>
</body>
</html>