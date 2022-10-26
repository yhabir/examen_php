<?php
require_once 'conexion_servidor.php';
$SQL_BORRAR = "DELETE FROM tiendacafe WHERE id = '".$_GET['id']."'";
$result_delete = mysqli_query(Conectar::cafe(),$SQL_BORRAR); 
if($result_delete){
	
           mysqli_free_result($result_delete);
           mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "notificador_borrado.php?interfaz=1";
           location.href = "notificador_borrado.php?interfaz=1";
		   document.location = "notificador_borrado.php?interfaz=1";
           }
           </script>';
           header("Location:notificador_borrado.php?interfaz=1");  
           exit();
	
}else{
	
           mysqli_free_result($result_delete);
           mysqli_close(Conectar::cafe());
           echo '<script LANGUAGE="javascript">
           setTimeout(redirigir, 800);
           function redirigir() {
           window.location.href= "notificador_borrado.php?interfaz=2";
           location.href = "notificador_borrado.php?interfaz=2";
		   document.location = "notificador_borrado.php?interfaz=2";
           }
           </script>';
           header("Location:notificador_borrado.php?interfaz=2");  
           exit();
	
}

?>