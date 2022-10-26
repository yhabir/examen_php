<?php
require_once 'conexion_servidor.php';
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$stock = $_POST['stock'];
$referencia = $_POST['referencia'];

$SQL_UPDATE = "UPDATE tiendacafe SET producto='$producto', precio='$precio', peso='$peso', categoria='$categoria', stock='$stock', referencia='$referencia' WHERE id = '".$_POST['id']."'";
$result_update = mysqli_query(Conectar::cafe(),$SQL_UPDATE); 
if($result_update){
           mysqli_free_result($result_delete);
           mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "notificador_update.php?interfaz=1";
           location.href = "notificador_update.php?interfaz=1";
		   document.location = "notificador_update.php?interfaz=1";
           }
           </script>';
           header("Location:notificador_update.php?interfaz=1");  
           exit();
}else{
           mysqli_free_result($result_delete);
           mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "notificador_update.php?interfaz=2";
           location.href = "notificador_update.php?interfaz=2";
		   document.location = "notificador_update.php?interfaz=2";
           }
           </script>';
           header("Location:notificador_update.php?interfaz=2");  
           exit();
}

?>