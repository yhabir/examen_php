<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>
</head>

<body>
<br />
<center>
<div style="border:rgba(102,102,102,1) solid 1px; border-radius:18px; width:30%;">
<h2>El Producto con más stock</h2>
<br />
<?php
require_once 'conexion_servidor.php';
$SQL_CARRITOmas = "SELECT * FROM tiendacafe WHERE stock >= 1 ORDER BY stock Desc LIMIT 1";
$resp_carrito = mysqli_query(Conectar::cafe(),$SQL_CARRITOmas);
while($data_carrito = mysqli_fetch_array($resp_carrito)){
echo '<h3>'.$data_carrito['producto'].'&nbsp;&nbsp;'.$data_carrito['referencia'].'&nbsp;&nbsp;'.$data_carrito['stock'].'</h3><br>';
}
?>
</div>
<br />
<a href="index.php" style="text-decoration:none; color:#06F;">Volver</a>
</center>
<br />
</body>
</html>