<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>
<style>
.prime{
	width:6%;
}
.segun{
	width:10%;
}
.terce{
	width:8%;
}
.cuatr{
	width:8%;
}
.quint{
	width:16%;
}
.sexto{
	width:6%;
}

.lab{
background:#06F; 
color:#FFF; 
font-weight:650;
padding:8px;
}

input[type="text"], input[type="submit"]{
	border:#FFF solid 0px;
}

input[name="stock"]{
	border:#06F solid 1px;
	width:50%;
}
</style>
</head>

<body>

<center>

<div style="width:90%; height:530px; border:#000 solid 1px;">

<br />

<h2>Carrito de compra</h2>
<br />
<h3>Productos agregados</h3>
<br />

<?php

require_once 'conexion_servidor.php';
/*
$id = $_GET['id'];
$SQL_TIENDACAFE = "SELECT * FROM tiendacafe WHERE id = '".$_GET['id']."'";
$resp_tcafe = mysqli_query(Conectar::cafe(),$SQL_TIENDACAFE);
$mdata = mysqli_fetch_array($resp_tcafe);
$stockcafe = $mdata['stock'];


if(!empty($_GET['ref'])){
$SQL_NCONSULTA = "SELECT * FROM carrito WHERE referencia = '".$_GET['ref']."'";	
}else{
	
}*/
$SQL_NCONSULTA = "SELECT * FROM carrito";
$resp_direct = mysqli_query(Conectar::cafe(),$SQL_NCONSULTA);
?>
<table border="1" style="width:60%;">
<tr>
<td class="prime lab">Referencia</td>
<td class="segun lab">Producto</td>
<td class="terce lab">Precio</td>
<td class="cuart lab">Stock</td>
<td class="quint lab">Fecha</td>
<td class="sexto lab">Borrar</td>
</tr>
<?php
while($dating = mysqli_fetch_array($resp_direct)){
?>
<tr>
<td class="prime"><?php echo $dating['referencia']; ?></td>
<td class="segun"><?php echo $dating['producto']; ?></td>
<td class="terce"><?php echo $dating['precio']; ?></td>
<td class="cuart"><?php echo $dating['stock']; ?></td>
<td class="quint"><?php echo $dating['fecha']; ?></td>
<td class="sexto"><a href="devolucion_producto.php?id=<?php echo $dating['id']; ?>&ref=<?php echo $dating['referencia']; ?>"><center><img src="borrar-datos.png" style="width:30px; height:30px;" /></center></a></td>
</tr>


<?php
}
?>
</table>
<br />
<a href="vender.php" style="text-decoration:none; color:#06F; font-weight:750;">Seguir Comprando</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<!--<a href="checkaut.php" style="text-decoration:none; color:#06F; font-weight:750;">Finalizar Compra</a>-->
</div>

</center>

</body>
</html>