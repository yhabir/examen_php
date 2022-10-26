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
<?php require_once 'lista.php'; ?>
<center>
<?php
require_once 'conexion_servidor.php';
$SQL_CONSULTA = 'SELECT * FROM tiendacafe';
$data_report = mysqli_query(Conectar::cafe(),$SQL_CONSULTA);
?>
<table border="2" style="width:50%;">
<tr>
<td class="prime lab"><b>ID</b></td>
<td class="segun lab"><b>Producto</b></td>
<td class="terce lab"><b>Referencia</b></td>
<td class="cuatr lab"><b>Precio</b></td>
<td class="quint lab"><b>Stock</b></td>
<td class="sexto lab"><b>Agregar</b></td>
</tr>
<?php
while($despl = mysqli_fetch_array($data_report)){
?>
<tr>
<form action="agregar_al_carrito.php" method="post" name="alcarrito" id="alcarrito" class="alcarrito">
<td class="prime"><input type="text" name="id" value="<?php echo $despl['id']; ?>" readonly="readonly" /></td>
<td class="segun"><input type="text" name="producto" value="<?php echo $despl['producto']; ?>" readonly="readonly" /></td>
<td class="terce"><input type="text" name="referencia" value="<?php echo $despl['referencia']; ?>" readonly="readonly" /></td>
<td class="cuatr"><input type="text" name="precio" value="<?php echo $despl['precio']; ?>" readonly="readonly" /></td>
<td class="quint">
<?php echo $despl['stock']; ?>
<input type="text" name="stock" value="<?php echo $despl['stock']; ?>" />
</td>
<td class="sexto"><center><input type="submit" name="agregar" value="Enviar" /></center></td>
</form>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>