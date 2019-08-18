
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	extract ($_POST);
	
	$insert= "UPDATE productos 
SET descripcion = '$descripcion',
 costo_compra = '$costo_compra',
 porc_ganancia = '$porc_ganancia',
 precio_venta = '$precio_venta',
 existencia = '$existencia',
 pesos_ganancia='$pesos_ganancia'
WHERE id_producto = $id_producto";
	
	if(mysqli_query($link,$insert)){
		$respuesta["estatus"] = "OK";
		$respuesta["mensaje"] = "Actualizado Correctamente";
		//$respuesta["id_clientes"] = mysqli_insert_id($link);
		}
	else{ 
		$respuesta["estatus"] = "ERROR";
		$respuesta["mensaje"] = mysqli_error($link);
		
		}
		
	echo json_encode($respuesta);
	 ?>
