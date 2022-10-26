<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>

<style>
.pri{
	width:6%;
}
.seg{
	width:20%;
}
.ter{
	width:10%;
}
.cua{
	width:10%;
}
.qui{
	width:6%;
}
.sex{
	width:20%;
}
.sep{
	width:8%;
}
.oct{
	width:10%;
}

.nue{
	width:5%;	
}

.die{
	width:5%;	
}

.lab{
background:#06F; 
color:#FFF; 
font-weight:650;
padding:8px;
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
<table border="2">
<tr>
<td class="pri lab"><b>ID</b></td>
<td class="seg lab"><b>Producto</b></td>
<td class="ter lab"><b>Referencia</b></td>
<td class="cua lab"><b>Precio</b></td>
<td class="qui lab"><b>Peso</b></td>
<td class="sex lab"><b>Categoría</b></td>
<td class="sep lab"><b>Stock</b></td>
<td class="oct lab"><b>Fecha</b></td>
<td class="nue lab"><b>Editar</b></td>
<td class="die lab"><b>Borrar</b></td>
</tr>
<?php
while($despl = mysqli_fetch_array($data_report)){
?>
<tr>
<td class="pri"><?php echo $despl['id']; ?></td>
<td class="seg"><?php echo $despl['producto']; ?></td>
<td class="ter"><?php echo $despl['referencia']; ?></td>
<td class="cua"><?php echo $despl['precio']; ?></td>
<td class="qui"><?php echo $despl['peso']; ?></td>
<td class="sex"><?php echo $despl['categoria']; ?></td>
<td class="sep"><?php echo $despl['stock']; ?></td>
<td class="oct"><?php echo $despl['fechacreacion']; ?></td>
<td class="nue"><a href="editar_producto.php?id=<?php echo $despl['id']; ?>&ref=<?php echo $despl['referencia']; ?>"><center><img src="editar_con_lapiz.jpg" style="width:30px; height:30px;" /></center></a></td>
<td class="die"><a href="borrar_producto.php?id=<?php echo $despl['id']; ?>"><center><img src="borrar-datos.png" style="width:30px; height:30px;" /></center></a></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>