<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA</title>

 
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="jquery-3.2.1.js"></script>
<script language="javascript">
$(document).ready(function(){
    $().ajaxStart(function(){
        $('#loading').show();
        $('#result').hide();
    document.getElementById("guardar").disabled = true;
      document.getElementById("guardar").value = 'Guardando...';
    }).ajaxStop(function(){
        $('#loading').hide();
        $('#result').fadeIn('slow');
    /*$('#infopersons').val("");
    $('#correo').val("");
    $('#telefono').val("");
    $('#relacion').val("");
    $('#motivo').val("");*/
    document.getElementById("producto").value = '';
    document.getElementById("precio").value = '';
    document.getElementById("peso").value = '';
    document.getElementById("categoria").value = '';
    document.getElementById("stock").value = '';
    document.getElementById("guardar").disabled = false;
    document.getElementById("guardar").value = 'Guardar Producto';
    document.getElementById("borrar").click();
    document.querySelector("#borrar").click();
    //document.getElementById("limpiar").reset();
    });
    $('#form, .form').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
            $('#result').html(data);
            document.getElementById("borrar").click();
            document.querySelector("#borrar").click();
            $('#producto').val("");
            $('#precio').val("");
            $('#peso').val("");
            $('#categoria').val("");
            $('#stock').val("");
            }
        })
        
        return false;
    }); 
})  
</script>

</head>

<body>

<?php require_once 'lista.php'; ?>


<center>

<form action="procesar_producto.php" method="post" name="form" id="form" class="form" style="padding:12px; border:rgba solid 1px; border-radius:12px;">
<table border="0">
<tr>
<td>
<label>Producto</label>
</td>
<td>
<input class="caja" id="producto" name="producto" type="text" />
</td>
</tr>

<tr>
<td>
<label>Precio</label>
</td>
<td>
<input class="caja" id="precio" name="precio" type="text" />
</td>
</tr>

<tr>
<td>
<label>Peso (Libra)</label>
</td>
<td>
<input class="caja" id="peso" name="peso" type="text" maxlength="4" />
</td>
</tr>

<tr>
<td>
<label>Categoría</label>
</td>
<td>
<select id="categoria" class="caja"name="categoria">
<option value="bebida" label="Bebida"></option>
<option value="cafe" label="Cafe"></option>
<option value="jugos" label="Jugos"></option>
<option value="comida" label="Comida"></option>
</select>
</td>
</tr>

<tr>
<td>
<label>Stock</label>
</td>
<td>
<input id="stock" class="caja" name="stock" type="number" />
</td>
</tr>

<tr>
<td>
<input id="borrar" name="borrar" type="reset" value="Borrar" />
</td>
<td>
<input id="guardar" name="guardar" type="submit" value="Guardar Producto" />
</td>
</tr>
</table>
</form>
<br />
<div id="result"></div>
</center>



</body>
</html>