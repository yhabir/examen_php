<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>
</head>

<body>
<br />

<?php
if($_GET['interfaz']==1){
?>
<center>
<div style="border:rgba(0,0,0,1) solid 1px; border-radius:8px; padding:12px; width:60%;">
<h2>Proceso exitoso</h2>
<br />
<h3>El producto se ha borrado de manera exitosa!</h3>
<br />
<a href="productos.php" style="text-decoration:none; color:#06F;">Volver</a>
</div>
</center>
<?php
}
?>

<?php
if($_GET['interfaz']==2){
?>
<center>
<div style="border:rgba(0,0,0,1) solid 1px; border-radius:8px; padding:12px; width:60%;">
<h2>Proceso Errado</h2>
<br />
<h3>El producto no se ha podido borrar, por favor, int&eacute;ntelo nuevamente!</h3>
<br />
<a href="productos.php" style="text-decoration:none; color:#06F;">Volver</a>
</div>
</center>
<?php
}
?>

<br />
</body>
</html>