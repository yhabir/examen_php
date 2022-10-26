<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>
</head>

<body>

<?php require_once 'lista.php'; ?>

<?php

require_once 'conexion_servidor.php';
/*
$id = $_GET['id'];
$SQL_TIENDACAFE = "SELECT * FROM tiendacafe WHERE id = '".$_GET['id']."'";
$resp_tcafe = mysqli_query(Conectar::cafe(),$SQL_TIENDACAFE);
$mdata = mysqli_fetch_array($resp_tcafe);
$stockcafe = $mdata['stock'];
*/

echo 'id: '; echo $id = $_GET['id'];  
echo '<br>';
echo 'ref: '; echo $ref = $_GET['ref'];
echo '<br>';

$SQL_CARRITO = "SELECT * FROM carrito WHERE id = '$id'";
$resp_carrito = mysqli_query(Conectar::cafe(),$SQL_CARRITO);
$data_carrito = mysqli_fetch_array($resp_carrito);
$stock_carrito = $data_carrito['stock'];
$SQL_NCONSULTA_TIENDA = "SELECT * FROM tiendacafe WHERE referencia = '$ref'";
$resp_tienda = mysqli_query(Conectar::cafe(),$SQL_NCONSULTA_TIENDA);
$data_tienda = mysqli_fetch_array($resp_tienda);
$stock_tienda = $data_tienda['stock'];
$stock_total = $stock_carrito + $stock_tienda;
$sql_devol = "UPDATE tiendacafe SET stock = $stock_total WHERE referencia = '$ref'";
$result_final = mysqli_query(Conectar::cafe(),$sql_devol);
if($result_final==TRUE){
$SQL_BORRAR_data = "DELETE FROM carrito WHERE id = '".$_GET['id']."'";
$result_delete_data = mysqli_query(Conectar::cafe(),$SQL_BORRAR_data); 	

           mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "notificador_update.php?interfaz=3&ref=$ref";
           location.href = "notificador_update.php?interfaz=3&ref=$ref";
		   document.location = "notificador_update.php?interfaz=3&ref=$ref";
           }
           </script>';
           header("Location:notificador_update.php?interfaz=3&ref=$ref");  
           exit();
		   
		   
}


?>



</body>
</html>