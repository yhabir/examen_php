<?php

require_once 'conexion_servidor.php';
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$geo = $producto.$precio.$peso.$categoria.$stock;
$newgeo = sha1(md5($geo));
$referencia = substr($newgeo,0,6);
setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8');
date_default_timezone_set('America/Colombia');
$fechacreacion = date("Y-m-d");//echo '<br>';
$SQL_INSERT = "
INSERT INTO tiendacafe(producto,precio,peso,categoria,stock,referencia,fechacreacion) 
VALUES ('".$producto."','".$precio."','".$peso."','".$categoria."','".$stock."','".$referencia."','".$fechacreacion."')";
$Data = mysqli_query(Conectar::cafe(),$SQL_INSERT);
if($Data=TRUE){
	echo '<b>El producto se guard&oacute; con &eacute;xito</b>';
}else{
    echo 'hubo problemas para guardar sus datos en el servidor!?';	
}


?>