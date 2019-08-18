<?php 
	
	include ("../conexi.php");
	$link=Conectarse();
	extract ($_POST);
	$respuesta = array();

	// Insertar en Ventas
		//Asignar id_ventas
		
		
			$insert_cotizacion=  "INSERT INTO cotizacion (nombre_cliente,fecha_cotizacion, total_cotizacion,venta,ganancia,porcentaje)VALUES ('$nombre_cliente','$fecha_cotizacion','$total_cotizacion', '$venta','$ganancia','$porcentaje')" ;
			
			
			if(mysqli_query($link,$insert_cotizacion)){
				$respuesta["estatus_cotización"] = "OK";
				$respuesta["mensaje_cotizacion"] = "Guardado Correctamente";
			 
				$id_cotizacion = mysqli_insert_id($link);//devuelve el autonumerico de la fila insertada
				$respuesta["id_cotizacion"] = $id_cotizacion;// para poder asignar a alguna variable
				
				} else{ 
				$respuesta["estatus_cotizacion"] = "ERROR COTIZACION";
				
				$respuesta["mensaje_cotizacion"] = mysqli_error($link);
			}
			$respuesta["query"] = $insert_cotizacion;
	
	
	foreach ($cantidad as $index => $valor){
		//if($valor != 0){
			//Insertar en ventas_detalle
		
			$insert_cotizacion_detalle= "INSERT INTO cotizacion_detalle (id_cotizacion,id_producto,descripcion, precio_compra, cantidad,componente) VALUES ('$id_cotizacion', '$id_producto[$index]',' $descripcion[$index]','$precio[$index]','$cantidad[$index]', '$etiqueta[$index]');" ;
			
			
			
			if(mysqli_query($link,$insert_cotizacion_detalle)){
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje"] = "Guardado  Detalles Correctamente";
				
				} else{ 
				$respuesta["estatus"] = "ERROR DETALLE";
				$respuesta["mensaje"] = mysqli_error($link);
			}
			
			//insertar en tabla movimientos
			
			
	
	
			
		}
	
	echo json_encode($respuesta);
	
	
	//Insertar Cliente Nuevo
	
?>

