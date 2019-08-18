
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	extract ($_POST);
	//$respuesta["descripcion"] = $descripcion;
	$contador=$cantidad;
	foreach ($contador as $index => $valor){
		if($valor != 0){
			$update= "UPDATE cotizacion_detalle 
			SET descripcion = '$descripcion[$index]',
			precio_compra = '$precio[$index]',
			cantidad='$cantidad[$index]'	
			WHERE componente = '$etiqueta[$index]';";
			 
			
			
			if(mysqli_query($link,$update)){  
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje"] = "Actualizado Correctamente";
				//$respuesta["id_clientes"] = mysqli_insert_id($link);
				$respuesta["descripcion"] = $descripcion;
				$respuesta["precio_compra"] = $precio;
				$respuesta["cantidad"] = $cantidad;
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
				$respuesta["descripcion"] = $descripcion;
				
				$respuesta["componente"] = $etiqueta;
				
			}
		
		}else{
				$delete="DELETE FROM cotizacion_detalle  where componente= '$etiqueta[$index]' ";
		if(mysqli_query($link,$delete)){  
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje_eliminar"] = "eliminado Correctamente";
				
				
				
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);

		}

	}
	}
	$update_general= "UPDATE cotizacion
			SET nombre_cliente= '$nombre_cliente',
		total_cotizacion = '$total_cotizacion',
		venta='$venta',	
		ganancia='$ganancia',	
		porcentaje='$porcentaje',	
		fecha_cotizacion='$fecha_cotizacion'	
			WHERE id_cotizacion= '$id_cotizacion';";
			
			if(mysqli_query($link,$update_general)){  
				$respuesta["estatus"] = "OK general";
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
				
			}
	echo json_encode($respuesta);
?>
