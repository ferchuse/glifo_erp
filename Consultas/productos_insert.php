<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta=array();
	extract ($_POST);
	$inventario_insertar = "INSERT INTO productos (descripcion,costo_compra,porc_ganancia,precio_venta,existencia,pesos_ganancia) VALUES ('$descripcion','$costo_compra','$porc_ganancia','$precio_venta','$existencia','$pesos_ganancia');";
	if(mysqli_query($link,$inventario_insertar)){
				$respuesta["estatus_inventario"] = "OK"; 
				$respuesta["mensaje_inventario"] = "Guardado Correctamente";
				} else{ 
				$respuesta["estatus_inventario"] = "ERROR";
				
				$respuesta["mensaje_inventario"] = mysqli_error($link);
			}
			
			
			echo json_encode($respuesta);
?>