<?php 
	
	include ("../conexi.php");
	$link=Conectarse();
	extract ($_POST);
	$respuesta = array();
	$acredito = isset($acredito) ? 1 : 0;
	if($acredito == 0){
		
		$cantidad_pagos = 0;	
		$pago_acordado = 0;	
		
	}
	// Insertar en Ventas
	//Asignar id_ventas
	
	
	$insert_venta=  "INSERT INTO ventas (id_clientes,fecha_ventas, anticipo_ventas, saldo_ventas, importe_total_ventas,acredito,cantidad_pagos,pago_acordado,pesos_ganancia_venta) VALUES ('$id_clientes','$fecha_ventas','$anticipo_ventas', '$saldo_ventas','$importe_total_ventas','$acredito','$cantidad_pagos','$pago_acordado','$pesos_ganancia_ventas')" ;
	
	
	if(mysqli_query($link,$insert_venta)){
		$respuesta["estatus_ventas"] = "OK";
		$respuesta["mensaje_ventas"] = "Guardado Correctamente";
		
		$id_ventas = mysqli_insert_id($link);//devuelve el autonumerico de la fila insertada
		$respuesta["id_ventas"] = $id_ventas;// para poder asignar a alguna variable
		
		} else{ 
		$respuesta["estatus_ventas"] = "ERROR";
		
		$respuesta["mensaje_ventas"] = mysqli_error($link);
	}
	$respuesta["query"] = $insert_venta;
	
	
	foreach ($importe as $index => $valor){
		if($valor != 0){
			//Insertar en ventas_detalle
			
			$insert_detalle= "INSERT INTO ventas_detalle (id_ventas,cantidad ,descripcion, precio, importe) VALUES ('$id_ventas', '$cantidad[$index]',' $descripcion[$index]','$precio[$index]','$importe[$index]')" ;
			
			
			
			if(mysqli_query($link,$insert_detalle)){
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje"] = "Guardado Correctamente";
				
				} else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
			}
			
			//insertar en tabla movimientos
			
			$insert_movimiento="INSERT INTO movimientos (fecha,tipo_movimiento,id_ventas,id_compras,existencia_anterior,cantidad,existencia_actual, id_producto) VALUES('$fecha_ventas','salida','$id_ventas','0','$existencia_anterior[$index]','$cantidad[$index]','$existencia_actual[$index]', '$id_producto[$index]');";
			if(mysqli_query($link,$insert_movimiento)){
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje"] = "Guardado Correctamente";
				
				} else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
			}
		}
		
		
		
		//actualizar cantidad 
		$actualiza_existencia="update productos SET existencia = '$existencia_actual[$index]' 
		WHERE id_producto = '$id_producto[$index]';";
		if(mysqli_query($link,$actualiza_existencia)){
			$respuesta["estatus"] = "OK";
			$respuesta["mensaje_Act"] = "Actualizado Correctamente";
			
			} else{ 
			$respuesta["estatus"] = "ERROR";
			$respuesta["mensaje_Act"] = mysqli_error($link);
		}
		
	}
	
	
	
	
	echo json_encode($respuesta);
	
	
	
?>

