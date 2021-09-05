<?php

$name = isset($_POST['name']) ? $_POST['name'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;

$pizza1_type = isset($_POST['pizza1_type']) ? $_POST['pizza1_type'] : null;
$pizza1_qty = isset($_POST['pizza1_qty']) ? $_POST['pizza1_qty'] : null;

$pizza2_type = isset($_POST['pizza2_type']) ? $_POST['pizza2_type'] : null;
$pizza2_qty = isset($_POST['pizza2_qty']) ? $_POST['pizza2_qty'] : null;

$pizza3_type = isset($_POST['pizza3_type']) ? $_POST['pizza3_type'] : null;
$pizza3_qty = isset($_POST['pizza3_qty']) ? $_POST['pizza3_qty'] : null;


$ar = fopen('storage/pedidos.txt','a') or die ("Problemas para grabar");
fputs($ar,"====================");
fputs($ar,"\n");
fputs($ar,"-<b>Pedido N15156</b>");
fputs($ar,"\n");
fputs($ar,"-<b>Cliente:</b> $name");
fputs($ar,"\n");
fputs($ar,"-<b>Direccion:</b> $address");
fputs($ar,"\n");
fputs($ar,"<b>-Pizzas:</b> ");
fputs($ar,"\n");
if(!empty($pizza1_type)){
	fputs($ar,"<li>-$pizza1_type : $pizza1_qty</li>");
	fputs($ar,"\n");
}
if(!empty($pizza2_type)){
	fputs($ar,"<li>-$pizza2_type : $pizza2_qty</li>");
	fputs($ar,"\n");
}
if(!empty($pizza3_type)){
	fputs($ar,"<li>-$pizza3_type : $pizza3_qty</li>");
	fputs($ar,"\n");
}
fputs($ar,"====================");
fputs($ar,"\n");
fclose($ar);
header('location:15-archivo-pedido_pizza_formulario.php?code=1');
?>