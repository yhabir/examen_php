<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php require_once 'lista.php'; ?>
<?php
require_once 'conexion_servidor.php';
$SQL_NCONSULTA = "SELECT * FROM tiendacafe WHERE id = '".$_POST['id']."'";
$resp_direct = mysqli_query(Conectar::cafe(),$SQL_NCONSULTA);
$dat = mysqli_fetch_array($resp_direct);
$stock_data = $dat['stock'];
echo '<br><br>';
echo $stock_form = $_POST['stock'];
echo '<br>';
$resultado_stock = $stock_data - $stock_form;
if($stock_form==0 || $stock_form=='0' || $stock_form==NULL){
echo '<center>
Disculpe, este producto no esta en existencia, por favor, elija otro!!
</center>';	
?>
<center>
<a href="vender.php" style="text-decoration:none; color:#06F;">Volver</a>
</center>
<?php	
}else{
if($stock_form <= $stock_data){
echo $producto = $_POST['producto']; echo '<br>';
echo $referencia = $_POST['referencia']; echo '<br>';
echo $precio = $_POST['precio']; echo '<br>';
echo $stock_form; //PARA AGREGAR EL NUEVO EN LA TABLA "CARRITO".
setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8');
date_default_timezone_set('America/Colombia');
$fecha = date("Y-m-d");//echo '<br>';
$sql_add_carrito = "INSERT INTO carrito (producto,referencia,precio,stock,fecha) VALUES ('$producto','$referencia','$precio','$stock_form','$fecha')";
$dat1 = mysqli_query(Conectar::cafe(),$sql_add_carrito);
echo $resultado_stock; //PARA ACTUALIZAR EN LA TABLA "PRODUCTOS".	
			$consulta_sql = "UPDATE tiendacafe SET stock ='$resultado_stock' WHERE id='".$_POST['id']."'";
    		$dat2 = mysqli_query(Conectar::cafe(),$consulta_sql);	
	if($dat1 == TRUE && $dat2 == TRUE):	
	       mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "carrito.php?id='.$_POST['id'].'&ref='.$_POST['referencia'].'";
           location.href = "carrito.php?id='.$_POST['id'].'&ref='.$_POST['referencia'].'";
		   document.location = "carrito.php?id='.$_POST['id'].'&ref='.$_POST['referencia'].'";
           }
           </script>';
           header("Location:carrito.php?id=".$_POST['id']."&ref=".$_POST['referencia']."");  
           exit();
	endif;	
}else{
echo '<center>
Disculpe, la cantidad <b>'.$stock_form.'</b> excede a la existencia del stock, por favor, elija un monto menor!!
</center>';	
?>
<center>
<a href="vender.php" style="text-decoration:none; color:#06F;">Volver</a>
</center>
<?php		
}
}
?>



</body>
</html>