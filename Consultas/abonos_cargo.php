<?php
	include ("../conexi.php");
	$link=Conectarse();
	extract($_POST);
	
	$respuesta=array();
	
	$insert_abono="INSERT INTO abonos  (fecha_abono,cantidad_abono,id_clientes,saldo_anterior,saldo_restante,concepto) VALUES('$fecha_abono','$cantidad_cargo','$id_clientes','$saldo_ventas','$importe_total_ventas','$concepto');";

 if(mysqli_query($link,$insert_abono)){
				$respuesta["estatus"] = "OK Cargo"; 
				$respuesta["mensaje"] = "Guardado Correctamente"; 
				} else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
			}
$actualizar_saldo_ventas="UPDATE ventas
SET saldo_ventas = '$importe_total_ventas'
WHERE id_ventas = $id_ventas;";	

 if(mysqli_query($link,$actualizar_saldo_ventas)){
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje"] = "Actualizado Correctamente";
				
				
				} else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["mensaje"] = mysqli_error($link);
			}
	
	echo json_encode($respuesta);
	
	
	
	?>