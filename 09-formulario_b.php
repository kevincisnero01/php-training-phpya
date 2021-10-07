<?php
$name = $_POST['name'];
$date = $_POST['date'];
$currentYear = date('Y');
$yearOfBirth = date('Y',strtotime($date));
$age = $currentYear-$yearOfBirth;

echo "Hola <b>$name</b> naciste en el año: <b>$yearOfBirth</b>, por lo tanto eres: ";
if($age >= 18)
	echo "Mayor de edad.";
else
	echo "Menor de edad.";
?>
<br><br>
<button><a href="09-formulario_a.php">Volver al formulario</a></button>